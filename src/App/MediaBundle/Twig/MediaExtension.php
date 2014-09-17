<?php


namespace App\MediaBundle\Twig;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Intl\Intl;

class MediaExtension extends \Twig_Extension
{
    /*
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
     protected $container;
     
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }
    
    public function getFilters()
    {
        return array(
            'formatImage' => new \Twig_SimpleFilter('formatImage', array($this, 'formatImage')),
        );
    }

    public function formatImage($entity, $format = "", $width = null)
    {
        
        $rootPath = $this->container->get('request')->getBasePath();
        if (is_file ( $rootPath."/uploads/medias/".$entity->getPath().'_'.$format.'.'.$entity->getExtension() )) {
            
            $format = '_'.$format;
        }
        else {
            
            $format = "";
        }
        $imagePath = $rootPath."/uploads/medias/".$entity->getPath().$format.'.'.$entity->getExtension();
        $formatImage = '<img width="'.$width.'" src="'.$imagePath.'" id="target" />';
        
        return $formatImage;
    }

    public function getName()
    {
        return 'media_extension';
    }

} 
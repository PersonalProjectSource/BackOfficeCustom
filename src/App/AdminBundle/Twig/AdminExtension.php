<?php


namespace App\AdminBundle\Twig;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Intl\Intl;

class AdminExtension extends \Twig_Extension
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

        );
    }

    public function formatImage($entity, $format = "", $width = null)
    {
        
        $rootPath = $this->container->get('request')->getBasePath();
        if (is_file ( $rootPath."/uploads/documents/".$entity->getPath().'_'.$format.'.'.$entity->getExtension() )) {
            
            $format = '_'.$format;
        }
        else {
            
            $format = "";
        }
        $imagePath = $rootPath."/uploads/documents/".$entity->getPath().$format.'.'.$entity->getExtension();
        $formatImage = '<img width="'.$width.'" src="'.$imagePath.'" id="target" />';
        
        return $formatImage;
    }

    /**
     * @param $code
     * @return mixed
     */
    public function country($code, $lang = "" )
    {
        return Intl::getRegionBundle()->getCountryName($code, $lang);
    }

    /**
    * @param $code
    * @return mixed
    */
    public function language($code, $lang = "")
    {
        if(empty($lang)) {
            return Intl::getLanguageBundle()->getLanguageName($code);
        }
        $languages = Intl::getLanguageBundle()->getLanguageNames($lang);
        if (array_key_exists($code, $languages)) {
            return $languages[$code];
        }

        return '';
    }


    public function getName()
    {
        return 'admin_extension';
    }

} 
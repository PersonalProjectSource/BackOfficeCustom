<?php


namespace App\AdminBundle\Twig;

use Symfony\Component\DependencyInjection\ContainerInterface;

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
            'priceFilter' => new \Twig_SimpleFilter('size', array($this, 'sizeFilter')),
        );
    }

    public function sizeFilter($entity, $format = "", $width = null)
    {
        
        $rootPath = $this->container->get('request')->getBasePath();
        if (is_file ( $rootPath."/uploads/documents/".$entity->getPath().'_'.$format.'.'.$entity->getExtension() )) {
            
            $format = '_'.$format;
        }
        else {
            
            $format = "";
        }
        $imagePath = $rootPath."/uploads/documents/".$entity->getPath().$format.'.'.$entity->getExtension();
        $imageFiltered = '<img width="'.$width.'" src="'.$imagePath.'" id="target" />';
        
        return $imageFiltered;
    }

    /**
     * slugify a text
     *
     * @param string $string
     * @access public
     * @return string
     * @static
     *
     * @author (c) <ADLM> <a.demurel@gmail.com>
     */
    public static function slugify($string)
    {
        $translit = array('Á'=>'A','À'=>'A','Â'=>'A','Ä'=>'A','Ã'=>'A','Å'=>'A','Ç'=>'C','É'=>'E','È'=>'E','Ê'=>'E','Ë'=>'E','Í'=>'I','Ï'=>'I','Î'=>'I','Ì'=>'I','Ñ'=>'N','Ó'=>'O','Ò'=>'O','Ô'=>'O','Ö'=>'O','Õ'=>'O','Ú'=>'U','Ù'=>'U','Û'=>'U','Ü'=>'U','Ý'=>'Y','á'=>'a','à'=>'a','â'=>'a','ä'=>'a','ã'=>'a','å'=>'a','ç'=>'c','é'=>'e','è'=>'e','ê'=>'e','ë'=>'e','í'=>'i','ì'=>'i','î'=>'i','ï'=>'i','ñ'=>'n','ó'=>'o','ò'=>'o','ô'=>'o','ö'=>'o','õ'=>'o','ú'=>'u','ù'=>'u','û'=>'u','ü'=>'u','ý'=>'y','ÿ'=>'y');

        $slug = strtr($string, $translit);
        $slug = strtolower($slug);
        $slug = preg_replace('#(.*?)\#.*#ims', '$1', $slug);
        $slug = preg_replace("/[^a-z0-9\s-]/", "", $slug);
        $slug = trim(preg_replace("/[\s-]+/", " ", $slug));
        $slug = preg_replace("/\s/", "-", $slug);

        return $slug;
    }

    public static function imgFormat($id, $format)
    {
        $entity = $em->getRepository('AppAdminBundle:Media')->find($id);
        $src       = $this->get('kernel')->getRootDir() . '/../web/uploads/documents/' . $entity->getPath() . '._' . $format .$entity->getExtension();
        if (!$src) {
            $src   = $this->get('kernel')->getRootDir() . '/../web/uploads/documents/' . $entity->getPath() . '.' .$entity->getExtension();
        }

        $entity = $em->getRepository('AppAdminBundle:Media')->find($id);
        $img = "<img src=".$src."/>";
        return $img;
    }

    public function getName()
    {
        return 'admin_extension';
    }

} 
<?php

namespace Frontend\Bundle\Extension\Twig;
use \Twig_Filter_Function;
use \Twig_Filter_Method;
/**
 * Description of FileExistsExtension
 *
 * @author Andres
 */
class TwigExtension extends \Twig_Extension {
    /**
         *Return the function registered as twig extension
         *
         *@return array
         */
        public function getFunctions()
        {
                return array('file_exists' => new \Twig_Function_Function('file_exists'));
        }
        
        public function getName()
        {
                return 'twig_extension';
        }
}

?>

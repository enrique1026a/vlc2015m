<?php
namespace core\models;

class Views
{
    public static function renderView($method, $config, $data=null)
    {
//                 echo "<pre>DATA:";
//                 print_r($data);
//                 echo "</pre>";
//                 echo "<pre>METHOD";
//                 print_r($method);
//                 echo "</pre>";
//                 echo "<pre>CONFIG:";
//                 print_r($config);
//                 echo "</pre>";
        
        $pos =  explode("::", $method);
//         echo "<pre>POS:";
//         print_r($pos);
//         echo "</pre>";

        
        $controller = lcfirst(
            substr($pos[0],
                strrpos($pos[0],"\\")+1
            )
        );
//         echo "<pre>POS:";
//         print_r($controller);
//         echo "</pre>";
//         echo "<pre>POS:";
//         print_r($pos[1]);
//         echo "</pre>";
        ob_start();
        include($config['view_path'].'/'.
            $controller.'/'.
            $pos[1].'.phtml'
        );
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
}

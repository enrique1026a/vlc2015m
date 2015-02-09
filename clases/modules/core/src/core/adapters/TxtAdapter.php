<?php
namespace core\adapters;

class TxtAdapter
{
    private $filename;

    public function __construct($config)
    {
        $this->filename = $config['filename'];
    }

    public function fetch()
    {
        // Leer el fichero usuarios.txt
        $usuarios = file_get_contents($this->filename);
        
        // separar el string de usuarios por saltos de linea en usuarios
        $usuarios = explode("\n", $usuarios);
        foreach ($usuarios as $key=>$usuario)
        {  

           $usuarios[$key]= explode("|", $usuario);

        }
//         echo "<pre>";
//         print_r($usuarios);
//         echo "</pre>";
//         die("kaka");
        return $usuarios;
        
    }

    public function save($queryString)
    {
        mysqli_query($this->link, $queryString);
    }


    public function __destruct()
    {
    }
}
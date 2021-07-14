<?php include_once"config.php";?>
<?php

    function get_noticia(){
        $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
        $noticias = array();

        $selecionar = mysqli_query("SELECT 'noticia_id', 'titulo', 'likes' FROM noticias");

        while($row = mysqli_fetch_object($selecionar)){
            $noticias[] = array(
                'id_noticia' => $row->noticia_id,
                'titulo' => $row->titulo,
                'likes' => $row->likes
            );
        }

        return $noticias;
    }
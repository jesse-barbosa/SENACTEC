<?php
class MostrarUrl {
    public function trocarUrl($url)
    {
        if(empty($url)) {
            $url = "../senactec/paginas/home.php";
        }
        else {
            $url = "../senactec/paginas/$url.php";
        }
        include_once ($url);
    }
}

?>
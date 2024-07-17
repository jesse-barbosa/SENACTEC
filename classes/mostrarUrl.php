<?php
class MostrarUrl {
    public function trocarUrl($url)
    {
        $baseDir = __DIR__ . '/../pagina/';
        if(empty($url)) {
            $filePath = $baseDir . 'home.php';
        }
        else {
            $filePath = $baseDir . $url . '.php';
        }


        if (file_exists($filePath)) {
            include_once($filePath);
        } else {
            echo "Erro: Arquivo não encontrado.";
        }
    }
}
?>

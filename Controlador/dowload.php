<?php
    $file=  file("C:/AppServ/www/GestorArchivosOficial/Controlador/archivos/Love in time of Cholera-Resume.docx");
    $file2= implode("", $file);
    header("Content-type: application/octet-stream"); 
    header("Content-disposition: attachment; filename=Love in time of Cholera-Resume.docx");
    
    echo $file2;
?>
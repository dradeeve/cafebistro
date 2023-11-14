<?php
require_once "conexao.php"

$prepa_sql = $icon->prepare("DELETE FROM PRODUTOS WHERE id=?");
if($prepare_sql){
    $prepare_sql->bind_param("i", $id);
    if($prepare_sql->execute()){
        
    }
} 
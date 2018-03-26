<?php

function crearUsuario($data){
    $usuario = [
        'name' => $data['name'],
        'email' => $data['email'],
        'pass' => password_hash($data['pass'], PASSWORD_DEFAULT),
        'pais' => $data['pais']
    ];

    return $usuario;
}


 ?>

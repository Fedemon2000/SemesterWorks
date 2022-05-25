<?php

require_once 'ejemplo3.php';
$p = new person('jose','perez',28);

echo json_encode($p);

$p->setNombre('Juan');
$p->setApellido('Perez');
$p->setEdad(30);
$p->setDomicilio('av.jacaranda');

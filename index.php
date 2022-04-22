<?php
require_once "inc/config.php";
require_once "controller/ReceitaController.php";
require_once "model/receita.php";

$app = new ReceitaController();
$app->all();
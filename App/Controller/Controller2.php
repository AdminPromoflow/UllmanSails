<?php
session_start();

/*---------------------------------  Imports  --------------------------------*/

require_once('../Config/database.php');
require_once('../Models/Searchs.php');


/*--------------------------------  CRUD users  ------------------------------*/

  var_dump($_POST); // Verificar qué se recibe en $_POST
    if ($_POST['module']=="seach") {
      $db = new Database();
      $seach = new Searchs($db);
      $seach->setWord($_POST['word']);
      $pages = json_encode($seach->searchPage());

      echo $pages;
    }
    if (isset($_POST['module']) && $_POST['module'] === "sendEmail") {
    echo "holaholaholahola a ver";
    } else {
      // Maneja el caso en que 'module' no se ha enviado correctamente
    echo "El valor 'module' no se ha recibido correctamente.";
    }



 ?>

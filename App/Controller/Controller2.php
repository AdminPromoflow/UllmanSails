<?php
session_start();

/*---------------------------------  Imports  --------------------------------*/

require_once('../Config/database.php');
require_once('../Models/Searchs.php');


/*--------------------------------  CRUD users  ------------------------------*/


    if ($_POST['module']=="seach") {
      $db = new Database();
      $seach = new Searchs($db);
      $seach->setWord($_POST['word']);
      $pages = json_encode($seach->searchPage());

      echo $pages;
    }
    elseif ($_POST['module']=="sendEmail") {
      echo "hola";
    }


 ?>

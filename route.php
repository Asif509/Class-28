<?php

//print_r($_GET);
//echo $_GET['page'];

require_once 'vendor/autoload.php';

use App\classes\HomePage;

if ($_GET['page'] == 'home')
{
  $homePage = new HomePage();
  $students = $homePage ->getStudents();
  include "pages/home.php";
}
<?php
include"head.php"; //librerias, estilos, metas tag
include"topBar.php";// top-bar
include"nav.php";// menu
if( FILE_PATH ==   URL_INDEX  )
{
  include ("slider_index.php");
}
else //header de pages internas
{
  include("header-pages.php");
}
//echo FILE_PATH ." ==  ". URL_INDEX;
?>
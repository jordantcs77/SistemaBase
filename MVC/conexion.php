<?php

function conectar_bd()
{
   $cn=mysqli_connect("localhost","root","","sanandres");
   return $cn;
}

?>
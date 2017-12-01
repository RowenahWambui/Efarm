<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$mysqli = new mysqli("localhost", "root", "","efarm");
   if($mysqli->connect_errno){
       
       echo "Connection Failed :(".$smyqli->connect_errno.")".$mysqli->connect_errno;
   }
   
   
   /*$mysqli = new mysqli("localhost", "bobolink_suzzete", "","bobolink_efarm");
   if($mysqli->connect_errno){
       
       echo "Connection Failed :(".$smyqli->connect_errno.")".$mysqli->connect_errno;
   }*/

   
   //
?>


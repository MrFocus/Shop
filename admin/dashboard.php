<?php 
session_start();
if(isset($_SESSION['Username'])){
   echo 'Welcom' . $_SESSION['Username'];
}else{
    header('Location: index.php');    
    exit(); 

}
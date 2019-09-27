<?php

include_once('conf.php');

if(isset($_POST['simpan'])){
 $id = $_GET['id'];
 $full_name = $_POST['full_name'];
 $email = $_POST['email'];
 $query = "UPDATE `register` SET `id` = '&id', `full_name` = '&full_name', `email` = '$email' WHERE `register`.`id` = '$id'";

 mysqli_query($conn, $query);
}

?>
<?php 
   session_start();
   require './db.inc.php';

   if (isset($_POST['submit'])) {
       
       $name = $_POST['name'];
       $uid = $_POST['uid'];
       $contact = $_POST['contact'];
       $pwd = $_POST['pwd'];
       $pwdRpt = $_POST['pwdRpt'];


       if ($pwd === $pwdRpt) {
           
           $query = 'INSERT INTO client_reg (name, uid, contact, pwd) VALUES ("$name", "$uid", "$contact", "$pwd")';
           $queryRun = mysqli_query($conn, $query);

           if ($queryRun) {
               $_SESSION['success'] = 'We are in :)';
           }
           else {
               $_SESSION['status'] = 'Failed :(';
               header('location: ../register.php');
           }
       }
       else {
           $_SESSION['status'] = 'Password do not match :(';
           header('location: ../register.php?=pwdMismatch');
       }
       
   } 
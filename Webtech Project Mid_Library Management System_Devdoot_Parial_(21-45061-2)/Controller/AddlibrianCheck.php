<?php
   session_start();
  require_once('../model/function.php');
  if (isset($_POST['submit'])){
    $Librian_ID=$_POST['Librianid'];
    $Librian_Name=$_POST['Librianname'];
    $Librian_Email=$_POST['Librianemail'];
    $Contact_Number=$_POST['Contactnumber'];
    $Assigned_Role=$_POST['Assignedrole'];


    if( $Librian_Name == "" || $Librian_Email== ""|| $Contact_Number== ""|| $Assigned_Role== ""){
        echo "Please Enter Data first";   
        echo '<br>';
        echo '<a href="../view/Addlibrian.php">Go Back </a>';
    }else{
        $_SESSION['flag'] = "true";
        $Librian = ['Librian_ID'=>$Librian_ID,'Librian_Name'=> $Librian_Name,'Librian_Email'=> $Librian_Email ,'Contact_Number'=>  $Contact_Number, 'Assigned_Role'=> $Assigned_Role];
       
        $status = AddLibrian($Librian);
        if($status){
           
            header('location: ../view/Viewlibrian.php');
        }else{
      echo "Error:";
      }
    
    }
  }  
?>
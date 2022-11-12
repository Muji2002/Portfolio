<?php
 
  if(isset($_POST[username]) && isset($_POST[password])){

    function validate($data){
      $data= trim($data);
      $data= stringslashes($data);
      $data= htmlspecialchars($data);
      return $data;
    
    }
    $username = validate($_POST['username'];
    $password = validate($_POST['password'];

  }else{
      header("locatin: index.php");
      exit();
    }
  

?>
<?php
 $BusinessUserName = $_POST['BusinessUserName']
 $Password = $_POST['Password']
 $ConfirmPassword = $_POST['ConfirmPassword']
 $BusinessName = $_POST['BusinessName']
 $BusinessAddress = $_POST['BusinessAddress']
 $BusinessPhone = $_POST['BusinessPhone']
 $BusinessEmail = $_POST['BusinessEmail']
 $Description = $_POST['Description']
 $Services = $_POST['Services']
 $logo = $_POST['logo']

$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
  die('Connection Failed) : '.%conn->connect_error);
}else{
  $stmt= $conn->perpare("insert into registration(BusinessUserName,Password,ConfirmPassword,BusinessName,BusinessAddress,BusinessPhone,BusinessEmail,Description,Services,logo)
  values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("sssssisssb",$BusinessUserName, $Password,$ConfirmPassword,$BusinessName,$BusinessAddress,$BusinessPhone,$BusinessEmail,$Description,$Services,$logo)
  $stmt->execute();
  echo "registration Successful";
  $stmt->close();
  $conn->close();

}

?>
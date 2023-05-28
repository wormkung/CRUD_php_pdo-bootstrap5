<?php 
 session_start();
require_once '../conn.php' ;

$email = $_POST['email'];
$password = $_POST['password'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$role = $_POST['role'];

$sql = "INSERT INTO `users`(`email`, `password`, `fname`, `lname`, `role`) VALUES (:email ,:password ,:fname ,:lname ,:role )";
$stmt = $conn->prepare($sql);

$hashpassword = password_hash($password , PASSWORD_DEFAULT); //เข้ารหัส

$stmt ->bindParam(':email', $email ,PDO::PARAM_STR);
$stmt ->bindParam(':password', $hashpassword ,PDO::PARAM_STR);
$stmt ->bindParam(':fname', $fname ,PDO::PARAM_STR);
$stmt ->bindParam(':lname', $lname ,PDO::PARAM_STR);
$stmt ->bindParam(':role', $role ,PDO::PARAM_STR);

if($stmt->execute()){
    $_SESSION['success'] = "เพิ่มข้อมูลผู้ใช้เรียบร้อยเรียบร้อยแล้ว! ";
    header("location: ../index.php");

}else{
 $_SESSION['error'] = "มีบางอย่างผิดพลาด โปรลองเพิ่มข้อมูลใหม่";
                    header("location: ../index.php");
}

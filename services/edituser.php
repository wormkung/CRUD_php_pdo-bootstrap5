<?php
session_start();
require_once '../conn.php';

$iduser = $_GET['iduser'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$role = $_POST['role'];

$sql = "UPDATE `users` SET `fname`=:fname,`lname`=:lname,`role`=:role WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':fname', $fname, PDO::PARAM_STR);
$stmt->bindParam(':lname', $lname, PDO::PARAM_STR);
$stmt->bindParam(':role', $role, PDO::PARAM_STR);
$stmt->bindParam(':id', $iduser, PDO::PARAM_STR);

if ($stmt->execute()) {
    $_SESSION['warning'] = "แก้ไขข้อมูลผู้ใช้เรียบร้อยเรียบร้อยแล้ว! ";
    header("location: ../index.php");

} else {
    $_SESSION['error'] = "มีบางอย่างผิดพลาด โปรลองเเก้ไขข้อมูลใหม่";
    header("location: ../index.php");
}

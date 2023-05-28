<?php 
session_start();
require_once '../conn.php';

$iduser = $_GET['id_user'];
$sql = "DELETE FROM `users` WHERE id = $iduser";
$stmt = $conn->prepare($sql);

if ($stmt->execute()) {
    $_SESSION['warning'] = "ลบข้อมูลผู้ใช้เรียบร้อยเรียบร้อยแล้ว! ";
    header("location: ../index.php");

} else {
    $_SESSION['error'] = "มีบางอย่างผิดพลาด โปรลองเเก้ไขข้อมูลใหม่";
    header("location: ../index.php");
}

<?php
session_start();
require_once '../conn.php';

$iduser = $_GET['iduser'];
$password = $_POST['password'];
$newpassword = $_POST['Newpassword1'];
$com = $_POST['Newpassword2'];

$sql = "SELECT * FROM users WHERE id = $iduser";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
$check = $result['password'];

if (password_verify($password, $check)) {
    if ($newpassword == $com) {
        $hesh_newpassword = password_hash($newpassword, PASSWORD_DEFAULT);
        $update_password = "UPDATE `users` SET `password`= :password WHERE id = :id";
        $stmt1 = $conn->prepare($update_password);
        $stmt1->bindParam(':password', $hash_newPassword, PDO::PARAM_STR);
        $stmt1->bindParam(':id', $iduser, PDO::PARAM_STR);

        if ($stmt1->execute()) {
            $_SESSION['warning'] = "แก้ไขรหัสผ่านผู้ใช้เรียบร้อย! ";
            header("location: ../index.php");
        } else {
            $_SESSION['error'] = "เปลี่ยนรหัสผ่านไม่สำเร็จ";
            header("location: ../index.php");
        }
    } else {
        $_SESSION['error'] = "รหัสผ่านไม่ตรงกัน";
    header("location: ../index.php");
    }
} else {
    $_SESSION['error'] = "รหัสผ่านไม่ถูกต้อง";
    header("location: ../index.php");
}

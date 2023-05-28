<?php
session_start();
require_once 'laout.php';
require_once 'conn.php';

$iduser = $_GET['id_user'];

$sql = "SELECT * FROM users WHERE id = $iduser";
$stmt = $conn->prepare($sql);
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<div class="container mt-5">
  <div class="d-flex align-items-center">
    <h1>แก้ไขข้อมูลผู้ใช้งาน</h1>
    <a href="index.php"><button type="button" class="btn btn-outline-secondary btn-sm my-3 mx-3">กลับ</button></a>
  </div>

  <form action="services/edituser.php?iduser=<?= $row['id']; ?>" method="post">
    <div class="mb-3 ">
      <label for="email" class="form-label">อีเมล</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" value="<?= $row['email']; ?>" disabled>
    </div>

    <div class="mb-3">
      <label for="fname" class="form-label">ชื่อจริง</label>
      <input type="text" class="form-control" id="fname" name="fname" placeholder="สมชาย" value="<?= $row['fname']; ?>">
    </div>
    <div class="mb-3">
      <label for="lname" class="form-label">นามสกุล</label>
      <input type="text" class="form-control" id="lname" name="lname" placeholder="เข็มกลัด" value="<?= $row['lname']; ?>">
    </div>

    <input type="hidden" type="text" class="form-control" name="email" value="<?= $row['email']; ?>">
    <input type="hidden" type="text" class="form-control" name="role" value="member">

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>โปรดระมัดระวัง!</strong> การแก้ไขข้อมูลของท่าน.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <button type="submit" class="btn btn-success form-control">ยืนยัน</button>
  </form>
</div>
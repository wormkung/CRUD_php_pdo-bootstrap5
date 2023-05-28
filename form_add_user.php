<?php
require_once 'laout.php';
?>
<div class="container mt-5">
  <div class="d-flex align-items-center">
    <h1>เพิ่มข้อมูล</h1>
    <a href="index.php"><button type="button" class="btn btn-outline-secondary btn-sm my-3 mx-3">กลับ</button></a>
  </div>

  <form action="services/adduser.php" method="post">
    <div class="mb-3 ">
      <label for="email" class="form-label">อีเมล</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required />
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">รหัสผ่าน</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="123456789" required />
    </div>
    <div class="mb-3">
      <label for="fname" class="form-label">ชื่อจริง</label>
      <input type="text" class="form-control" id="fname" name="fname" placeholder="สมชาย" required />
    </div>
    <div class="mb-3">
      <label for="lname" class="form-label">นามสกุล</label>
      <input type="text" class="form-control" id="lname" name="lname" placeholder="เข็มกลัด" required />
    </div>

    <input type="hidden" type="text" class="form-control" name="role" value="member">


    <button type="submit" class="btn btn-success form-control">ยืนยัน</button>
  </form>
</div>
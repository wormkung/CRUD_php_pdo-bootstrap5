 <?php
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
         <h1>แก้ไขรหัสผ่าน <span class="btn btn-danger"> <?= "คุณ" . " " . $row['fname']; ?></span> </h1>
         <a href="index.php"><button type="button" class="btn btn-outline-secondary btn-sm my-3 mx-3">กลับ</button></a>
     </div>
     <form action="services/chang_password.php?iduser=<?= $row['id']; ?>" method="post">
         <div class="mb-3">
             <label for="password" class="form-label">รหัสผ่านเก่า</label>
             <input type="password" class="form-control" id="password" name="password" required>
         </div>
         <div class="mb-3">
             <label for="Newpassword1" class="form-label">รหัสผ่านใหม่</label>
             <input type="password" class="form-control" id="Newpassword1" name="Newpassword1" required>
         </div>
         <div class="mb-3">
             <label for="Newpassword2" class="form-label">ยืนยันรหัสผ่านใหม่</label>
             <input type="password" class="form-control" id="Newpassword2" name="Newpassword2" required>
         </div>
         <div class="alert alert-warning alert-dismissible fade show" role="alert">
             <strong>โปรดระมัดระวัง!</strong> การแก้ไขข้อมูลอันสำคัญของท่าน.
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
         <button type="submit" class="btn btn-success form-control -20">ยืนยันการแก้ไข</button>
     </form>
 </div>
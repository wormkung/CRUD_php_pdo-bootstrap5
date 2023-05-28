<?php
session_start();
require_once 'laout.php';
require_once 'conn.php';

$sql = 'SELECT * FROM users';
$stmt = $conn->prepare($sql);

$stmt->execute();
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

$count = $stmt->rowCount();

$row2 = array_reverse($row);


?>

<div class="container my-5">
    <div class="d-flex justify-content-between">
        <h1>แสดงข้อมูลผู้ใช้งาน</h1>
        <a href="form_add_user.php"><button type="button" class="btn btn-outline-success btn-lg my-3 mx-3">เพิ่ม</button></a>
    </div>

    <?php if (isset($_SESSION['success'])) { ?>
        <div class="alert alert-success" role="alert">
            <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
        </div>
    <?php } ?>
    <?php if (isset($_SESSION['error'])) { ?>
        <div class="alert alert-danger" role="alert">
            <?php
            echo $_SESSION['error'];
            unset($_SESSION['error']);
            ?>
        </div>
    <?php } ?>
    <?php if (isset($_SESSION['warning'])) { ?>
        <div class="alert alert-warning" role="alert">
            <?php
            echo $_SESSION['warning'];
            unset($_SESSION['warning']);
            ?>
        </div>
    <?php } ?>


    <table class="table text-center table-hover table-bordered mt-4 ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">อีเมล</th>
                <th scope="col">ชื่อจริง</th>
                <th scope="col">นามสกุล</th>
                <th scope="col">สถานะ</th>
                <th scope="col">เครื่องมือ</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($row2  as $user) {  ?>
                <tr>

                    <th scope="row"><?= $user['id']; ?></th>
                    <td><?= $user['email']; ?></td>
                    <td><?= $user['fname']; ?></td>
                    <td><?= $user['lname']; ?></td>
                    <td><?= $user['role']; ?></td>
                    <td><a href="form_edit_user.php?id_user=<?= $user['id'];  ?>"><button class="btn btn-primary btn-sm">แก้ไข</button></a>
                        <a href="form_chang_password.php?id_user=<?= $user['id'];  ?>"><button class="btn btn-warning  btn-sm">เปลี่ยนรหัสผ่าน</button></a>
                        <a href="services/delete_user.php?id_user=<?= $user['id']; ?>"><button class="btn btn-danger  btn-sm">ลบ</button></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <p class="font-monospace">rows users = <?= $count ?></p>
</div>
<?php
include 'template/header.html';
require_once 'connectdb.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $frmUsername = $frmPassword = "";
    $frmUsername = $_POST["username"];
    $frmPassword = $_POST["password"];

    if ($frmUsername && $frmPassword) {
        $strsql = "INSERT INTO `user`( `UserName`, `PassWord_hash`,Status) ";
        $strsql .= "VALUES ( '" . $frmUsername . "' , '" . $frmPassword . "',1) ";

        $result = $myconn->query($strsql);
        if ($result) {
            echo "เพิ่มข้อมูลสำเร็จ";
        } else {
            echo "ไม่สามารถเพิ่มข้อมูลได้";
        }
    }
}

?>

<body>


    <form action="insert.php" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
            <small id="emailHelp" class="form-text text-muted">ไอ้ควายย รีบๆกรอก ไอ้โง่.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>

        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>

    <?php
    include 'template/Footer.html';
    ?>
</body>

</html>
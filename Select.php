<?php
include 'template/header.html';
require_once 'connectdb.php';

$strSQL = "SELECT `IdUser`, `UserName`, `PassWord_hash`, `Status` FROM `user` WHERE 1";
$result = $myconn->query($strSQL);


?>


<body>
    <table class="table table-sm table-dark" >
    <thead >
        <tr>
            <th> ลำดับ</th>
            <th> ชื่อผู้ใช้</th>
            <th> สถานะ</th>
            <th>แก้ไข</th>
            <th>ลบ</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($row = $result->fetch_array()) {
            //echo $row["UserName"] . "<br>";

        ?>
        
            <tr>
                
                <td> <?php echo $row["IdUser"] ?></td>
                <td> <?php echo $row["UserName"] ?></td>
                <td> <?php echo $row["Status"] ?></td>
                <td><a href="update.php?id=<?= $row["IdUser"] ?>&UserName=<?= $row["UserName"] ?>&Status=<?= $row["Status"] ?>">edit</a></td>
                <td><a href="delete.php?id=<?php echo $row["IdUser"] ?>"><i class="fas fa-trash"></i></a></td>
            </tr>

        <?php

        }
        ?>
     <tbody>
    </table>
    <?php
    include 'template/Footer.html';
    ?>
</body>

</html>
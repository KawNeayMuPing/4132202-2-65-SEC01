<?php
include "../model/condb.php";
?>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>NAME</th>
            <th>PASS</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM tb_user ORDER BY user_id ASC";
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
                <td><?= $row['std_id'] ?></td>
                <td><?= $row['std_name'] ?></td>
                <td><?= $row['std_sname'] ?></td>
                <td><button class="btn_edit" data="<?= $row['std_id'] ?>">Edit</button></td>
                <td><button class="btn_del" data="<?= $row['std_id'] ?>">DEL</button></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    $(".btn_del").click(function(){
        let data = $(this).attr("data");
    });
</script>

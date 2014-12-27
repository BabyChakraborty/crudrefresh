
<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "baby12",
    "ftflbatch2");
$query = "select * from personal_info WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
//print_r($row);
?>
<table border="1" width="100%">
    <tr>
        <td>ID</td>
        <td>Full Name</td>
        <td>Father's Name</td>
        <td>Mather's Name</td>
        <td>Nationality</td>
        <td>National ID</td>
        <td>Email</td>
        <td>Mobile</td>
        <td>Track</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['fullname']?></td>
            <td><?php echo $row['fname']?></td>
            <td><?php echo $row['mname']?></td>
            <td><?php echo $row['nationality']?></td>
            <td><?php echo $row['nationalid']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['mobile']?></td>
            <td><?php echo $row['track']?></td>
            <td> <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>
    <?php
    }
    ?>
</table>
<a href="list.php">Go to Home</a>

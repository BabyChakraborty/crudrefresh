

<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "baby12",
    "ftflbatch2");
$query = "select * from personal_info WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />
    <label>Full Name:</label>
    <textarea name="fullname"><?php echo $row['fullname'];?></textarea>
    <br>
    <label>Father's Name:</label>
    <textarea name="fname"><?php echo $row['fname'];?></textarea>
    <br>
    <label>Mother's Name:</label>
    <input type="text" name="mname" value="<?php echo $row['mname'];?>" />
    <br>
    <label>Nationality:</label>
    <input type="text" name="nationality" value="<?php echo $row['nationality'];?>" />
    <br>
    <label>National ID</label>
    <input type="text" name="nationalid" value="<?php echo $row['nationalid'];?>" />
    <br>
    <label>Email:</label>
    <input type="text" name="email" value="<?php echo $row['email'];?>" />
    <br>
    <label>Mobile:</label>
    <input type="text" name="mobile" value="<?php echo $row['mobile'];?>" />
    <br>
    <label>Track:</label>
    <select name = "track">
        <option <?php if ($row ['track']== "ITS") echo 'selected'; ?> value="ITS">ITS</option>
        <option <?php if ($row ['track']== "ITES") echo 'selected'; ?> value="ITES">ITES</option>
        <option <?php if ($row ['track']== "ITSS") echo 'selected'; ?> value="ITSS">ITSS</option>
    </select>
    <br>
    <button type="submit">Update</button>
    <button type="reset">Cancel</button>
</form>
</html>


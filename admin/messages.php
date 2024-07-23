<?php
include('includes/header.php');
?>
<link rel="stylesheet" href="css/messages.css">
<title>Admin | Messages</title>
<h1 class="um-txt"><u>User Messages</u></h1>
<div class="msgtbl">
    <?php
    include('includes/configure.php');
    $query = "SELECT * FROM user_messages";
    $query_run = mysqli_query($conn, $query);
    ?>
    <table>
        <tr>
            <th>Sr.no</th>
            <th>Date</th>
            <th>User Name</th>
            <th>Message</th>
        </tr>
        <?php
        if (mysqli_num_rows($query_run) > 0) {
            while ($row = mysqli_fetch_assoc($query_run)) {
        ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['user']; ?></td>
                    <td><?php echo $row['msg']; ?></td>
                </tr>
        <?php
            }
        } else {
            echo "No Record Found !!!";
        }
        ?>
    </table>
</div>
<?php
include('includes/footer.php');
?>
</body>

</html>
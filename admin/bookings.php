<?php
include('includes/header.php');
include('includes/configure.php');
if(isset($_POST['bk_cfrm'])){
  $status = "Confirmed";
  $bkid = $_POST['bkid_cfrm'];
  $sql1 = "UPDATE user_bookings SET user_status='$status' WHERE bkid='$bkid'";
  $query1 = mysqli_query($conn, $sql1);
  if($query1){
    $_SESSION['msgbk'] = "Booking Confirmed";
    header("location: bookings.php");
  }
}
elseif(isset($_POST['bk_cncl'])){
  $status = "Cancelled";
  $bkid = $_POST['bkid_cncl'];
  $sql1 = "UPDATE user_bookings SET user_status='$status' WHERE bkid='$bkid'";
  $query1 = mysqli_query($conn, $sql1);
  if($query1){
    $_SESSION['msgbk'] = "Booking Cancelled";
    header("location: bookings.php");
  }
}
if(isset($_POST['msgok'])){
  unset($_SESSION['msgbk']);
}
?>
<link rel="stylesheet" href="css/popup.css">
<link rel="stylesheet" href="css/bookings.css">
<title>Admin | Bookings</title>
<div class="bktbl1">
  <h1><u>Booking Status</u></h1>
  <table class="tbl1">
    <tr>
      <th>TOTAL BOOKINGS</th>
      <th>PENDING</th>
      <th>CONFIRMED</th>
      <th>CANCELLED</th>
    </tr>
    <tr>
      <?php
      $sql2 = "SELECT bkid FROM user_bookings ORDER BY bkid";
      $query2 = mysqli_query($conn, $sql2);
      $tbkrow = mysqli_num_rows($query2);
      $sql3 = "SELECT user_status FROM user_bookings WHERE user_status='Pending' ORDER BY user_status";
      $query3 = mysqli_query($conn, $sql3);
      $pendrow = mysqli_num_rows($query3);
      $sql4 = "SELECT user_status FROM user_bookings WHERE user_status='Confirmed' ORDER BY user_status";
      $query4 = mysqli_query($conn, $sql4);
      $cfrmrow = mysqli_num_rows($query4);
      $sql5 = "SELECT user_status FROM user_bookings WHERE user_status='Cancelled' ORDER BY user_status";
      $query5 = mysqli_query($conn, $sql5);
      $cnclrow = mysqli_num_rows($query5);
      ?>
      <td><?php echo $tbkrow; ?></td>
      <td><?php echo $pendrow; ?></td> 
      <td><?php echo $cfrmrow; ?></td>
      <td><?php echo $cnclrow; ?></td>
    </tr>
  </table>
</div>
<div class="bktbl2">
  <?php
  include('includes/configure.php');
  $query = "SELECT * FROM user_bookings";
  $query_run = mysqli_query($conn, $query);
  ?>
  <div class="top-text-search">
    <h1><u>User Bookings</u></h1>
    <input type="text" id="search" placeholder="Search Booking ID" onkeyup="myFunction()">
    <i class="fa fa-search" aria-hidden="true"></i>
  </div>
  <?php
if (isset($_SESSION['msgbk'])) {
?>
<div class="popup1">
<p><?php echo $_SESSION['msgbk']; ?></p>
<form action="bookings.php" method="POST">
<button type="submit" name="msgok">OK</button>
</form>
</div>
<?php
}
  ?>
  <table class="tbl2" id="myTable">
    <tr>
      <th>BKID</th>
      <th>PKGID</th>
      <th>PKG LOCATION</th>
      <th>PKG NAME</th>
      <th>USER EMAIL</th>
      <th>BOOKING DATE</th>
      <th>DEPART DATE</th>
      <th>STATUS</th>
      <th style="text-align: center;" colspan="2">ACTION</th>
    </tr>
    <?php
    error_reporting(0);
    if (mysqli_num_rows($query_run) > 0) {
      while ($row = mysqli_fetch_assoc($query_run)) {
    ?>
        <tr>
          <td>BKID12<?php echo $row['bkid']; ?></td>
          <?php
          $india = "India";
          if($row['pkg_location']==$india){
            ?>
          <td>INDPKG1<?php echo $row['pkgid']; ?></td>  
          <?php 
          }else{
            ?>
          <td>INLPKG2<?php echo $row['pkgid']; ?></td>
          <?php
          }
          ?>
          <td><?php echo $row['pkg_location']; ?></td>
          <td><?php echo $row['pkg_name']; ?></td>
          <td><?php echo $row['user_email']; ?></td>
          <td><?php echo date('d-m-Y h:i A',strtotime($row['date'])); ?></td>
          <td><?php echo $row['user_date']; ?></td>
          <td><?php echo $row['user_status']; ?></td>
          <td>
          <form action="bookings.php" method="POST">
          <input type="hidden" name="bkid_cfrm" value="<?php echo $row['bkid']; ?>">
          <?php
          $pending = "Pending";
          if($row['user_status']==$pending)
          { 
            ?>
          <button class="confirm" type="submit" name="bk_cfrm">Confirm</button>
          <?php
          }
          else{
            ?>
          <button class="bkdeactive" disabled type="submit" name="bk_cfrm">Confirm</button>
          <?php 
          }
          ?>
          </form>
          </td>
          <td>
          <form action="bookings.php" method="POST">
          <input type="hidden" name="bkid_cncl" value="<?php echo $row['bkid']; ?>">
          <?php
          $pending = "Pending";
          if($row['user_status']==$pending)
          { 
            ?>
          <button class="cancel" type="submit" name="bk_cncl">Cancel</button>
          <?php
          }
          else{
            ?>
          <button class="bkdeactive" disabled type="submit" name="bk_cncl">Cancel</button>
          <?php 
          }
          ?>
          </form>
          </td>
        </tr>
    <?php
      }
    } else {
      echo "No Record Found !!!";
    }
    ?>
  </table>
</div>
<script>
  function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("search");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }
</script>
<?php
include('includes/footer.php');
?>
</body>

</html>
<?php
include("includes/header.php");
include("includes/configure.php");
if(isset($_POST['refund'])){
  $refund_status = "Refunded";
  $refund_id = $_POST['refund_id'];
  $sql7 = "UPDATE user_bookings SET user_transaction='$refund_status' WHERE bkid='$refund_id'";
  $query7 = mysqli_query($conn, $sql7);
  if($query7){
    $_SESSION['msgtxn'] = "Payment Refunded Successfully";
  }
}
if(isset($_POST['msgok'])){
  unset($_SESSION['msgtxn']);
}
?>
<link rel="stylesheet" href="css/popup.css">
<link rel="stylesheet" href="css/bookings.css">
<style>
button.refund{
  font-family: 'Roboto Condensed',sans-serif;
  border: none;
  display: block;
  width: 100%;
  padding: 5px 10px 5px 10px;
  text-align: center;
  background: black;
  outline: none;
  font-size: 20px;
  color: white;
  cursor: pointer;
  transition: .3s;
}
button.refund:hover{
  transform: translate3d(-2px);
    background: rgb(223, 48, 48);
}
button.deactive{
  font-family: 'Roboto Condensed',sans-serif;
    border: none;
    display: block;
    width: 100%;
    padding: 5px 5px;
    text-align: center;
    background: rgb(191, 193, 196);
    outline: none;
    font-size: 20px;
    color: white;
    cursor: pointer;
    transition: .3s;
}


</style> 
<title>Admin | Transactions</title>
<div class="bktbl2">
<div class="top-text-search">
  <h1><u>User Transactions</u></h1>
  <input type="text" id="search" placeholder="Search Transaction ID" onkeyup="myFunction()">
  <i class="fa fa-search" aria-hidden="true"></i>
</div>
<?php
if (isset($_SESSION['msgtxn'])) {
?>
<div class="popup1">
<p><?php echo $_SESSION['msgtxn']; ?></p>
<form action="transactions.php" method="POST">
<button type="submit" name="msgok">OK</button>
</form>
</div>
<?php
}
  ?>
  <?php
  $query = "SELECT * FROM user_bookings";
  $query_run = mysqli_query($conn, $query);
  ?>
  <table class="tbl2" id="myTable">
    <tr>
      <th>TXN_ID</th>
      <th>TXN_TIMELINE</th>
      <th>BKID</th>
      <th>USER EMAIL</th>
      <th>PAYMENT</th>
      <th>PKG STATUS</th>
      <th>TXN STATUS</th>
      <th>ACTION</th>
    </tr>
    <?php
    if (mysqli_num_rows($query_run) > 0) {
      while ($row = mysqli_fetch_assoc($query_run)) {
    ?>
        <tr>
          <td>TXN123<?php echo $row['bkid']; ?></td>
          <td><?php echo date('d-m-Y h:i A',strtotime($row['date'])); ?></td>
          <td>BKID12<?php echo $row['bkid']; ?></td>
          <td><?php echo $row['user_email']; ?></td>
          <td>Rs. <?php echo $row['user_amt']; ?></td>
          <td><?php echo $row['user_status']; ?></td>
          <td style="color: green;"><?php echo $row['user_transaction']; ?></td>
          <td>
              <form action="transactions.php" method="POST">
                <input type="hidden" name="refund_id" value="<?php echo $row['bkid']; ?>">
                <?php
                $txn_status="Refunded";
                $pkg_status="Confirmed";
                if($row['user_status']==$pkg_status or $row['user_transaction']==$txn_status)
                {
                  ?>
                  <button class="deactive" disabled name="refund">Refund</button>
                <?php  
                }else{
                  ?>
                  <button class="refund" name="refund">Refund</button>
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
include("includes/footer.php");
?>
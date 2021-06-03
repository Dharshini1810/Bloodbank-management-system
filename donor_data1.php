<?php
$page = 'data';
include 'inc/header2.php';
?>
<!-- my code goes here -->
<div class="text-center mt-5">
  <p class="display-4" style="padding-top:95px; font-size: 40px; font-weight: bolder; color: #A83E51;">REQUEST DATA</p>
</div>

<?php
$err = '';

if (isset($_GET['id'])) {
  $donor_id = $_GET['id'];

  // action
  if (isset($_GET['action'])) {
    $action = $_GET['action'];
    if ($action == 'donate_now') {
      $sql = "SELECT * FROM req_donor WHERE id='$donor_id';";
      $result = mysqli_query($conn, $sql);
      $result_check = mysqli_num_rows($result);
      $row = mysqli_fetch_assoc($result);
      /*$new_donation_count = $row['donation_count'] + 1;*/

      mysqli_query($conn, $sql);

      $err = 'updated';
    } else if ($action == 'delete_donor') {
      $sql = "UPDATE req_donor SET del=1 WHERE id='$donor_id';";
      mysqli_query($conn, $sql);

      header('Location: service.php');
    }
  }
  // action

  $sql = "SELECT * FROM req_donor WHERE id='$donor_id';";
  $result = mysqli_query($conn, $sql);
  $result_check = mysqli_num_rows($result);

  if( $result_check > 0 ){
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="container">
          <form class="pt-2 pb-5 mx-auto" method="post" action="#" style="max-width: 400px">
          <div class="form-group">
            <label>Patient Name</label>
            <input name="pname" disabled value="<?php echo $row['pname']; ?>" type="text" class="form-control">
          </div> 
          <div class="form-group">
            <label>Gender</label>
            <input name="gender" disabled value="<?php echo $row['gender']; ?>" type="text" class="form-control">
          </div> 
          <div class="form-group">
            <label>Blood Group</label>
            <input name="bgroup" disabled value="<?php echo $row['bgroup']; ?>" type="text" class="form-control">
          </div> 
          <div class="form-group">
            <label>Units</label>
            <input name="units" disabled value="<?php echo $row['units']; ?>" type="text" class="form-control">
          </div> 
          <div class="form-group">
            <label>Name and Address of the Hospital</label>
            <input name="nameandaddress" disabled value="<?php echo $row['nameandaddress']; ?>" type="text" class="form-control">
          </div> 
          <div class="form-group">
            <label>Doctor Name</label>
            <input name="dname" disabled value="<?php echo $row['dname']; ?>" type="text" class="form-control">
          </div> 
          <div class="form-group">
            <label>Required Date</label>
            <input name="reqname" disabled value="<?php echo $row['reqname']; ?>" type="date" class="form-control">
          </div> 
          <div class="form-group">
            <label>Contact Name</label>
            <input name="cname" disabled value="<?php echo $row['cname']; ?>" type="text" class="form-control">
          </div> 
          <div class="form-group">
            <label>Address</label>
            <input name="address" disabled value="<?php echo $row['address']; ?>" type="text" class="form-control">
          </div> 
          <div class="form-group">
            <label>Phone No</label>
            <input name="phone" disabled value="<?php echo $row['phone']; ?>" type="text" class="form-control">
          </div> 
          <div class="form-group">
            <label>E-mail</label>
            <input name="mailid" disabled value="<?php echo $row['mailid']; ?>" type="text" class="form-control">
          </div> 
         

          <!-- error message -->
          <?php
            if($err == 'updated'){
              ?>
              <div class="alert alert-success" role="alert">
                <b>SUCCESS!</b> Request Accepted.
              </div>
              <?php
            }
           ?>
           <!-- error message -->
           <a href="donor_data1.php?id=<?php echo $donor_id; ?>&action=donate_now" class="btn btn-primary btn-block" style="background:#A83E51; border:none;">Accept Request</a>
           <a href="donor_data1.php?id=<?php echo $donor_id; ?>&action=delete_donor" class="btn btn-danger btn-block" style="background:#A83E51; border:none;">Delete donor</a>
        </form>
        </div>
        <?php
    }
  }
}
?>


<!-- my code ends here -->
<?php include 'inc/footer1.php'; ?>

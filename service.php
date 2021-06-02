<?php 
$page = 'home'; 
include 'inc/header.php'; 
?>
<!-- my code goes here -->

<?php 
$err = '';

if (isset($_POST['req_donor'])) {
  $pname = $_POST['pname']; 
  $gender = $_POST['gender'];
  $bgroup = $_POST['bgroup'];
  $units = $_POST['units'];
  $nameandaddress = $_POST['nameandaddress'];
  $dname = $_POST['dname'];
  $reqname = $_POST['reqname'];
  $cname = $_POST['cname'];
  $address = $_POST['address'];
  $phone = $_POST['phone']; 
  $mailid = $_POST['mailid']; 

  if (empty($pname) || empty($phone)) {
    $err = 'empty';
  } else{
    // check in database
    $sql = "INSERT INTO req_donor(pname, gender, bgroup, units, nameandaddress, dname, reqdate, cname, address, phone, ,mailid) VALUES(  '$pname', '$gender', '$bgroup', '$units', '$nameandaddress', '$dname', '$reqname', '$cname', '$address', '$phone', '$mailid')";    
    mysqli_query($conn, $sql);
    $err = 'success';
    // check in database
  }
} 
?>


<div class="container">
  <div class="text-center mt-5">
    <p class="display-4" style="padding-top:85px; font-size: 40px; font-weight: bold; font-style: italics; color:#A83E51;">REQUEST BLOOD</p>
  </div>
  <form class="pt-2 pb-5 mx-auto" method="post" action="#" style="max-width: 400px" style="font-family: cursive; font-weight: bold;">
  <div class="form-group" style="font-family: cursive;  font-size: 20px;">
    <label>Patient name</label>
    <input required name="pname" type="text" class="form-control">
  </div>  
  <div class="form-group" style="font-family: cursive;  font-size: 20px;">
    <label for="exampleFormControlSelect1">Gender</label>
    <select required name="gender" class="form-control" id="exampleFormControlSelect1">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Others">Others</option>
    </select>
  </div>
  <div class="form-group" style="font-family: cursive;  font-size: 20px;">
    <label for="exampleFormControlSelect1">Required Blood Group</label>
    <select required name="bgroup" class="form-control" id="exampleFormControlSelect1">
      <option value="A+">A+</option>
      <option value="A-">A-</option>
      <option value="B+">B+</option>
      <option value="B-">B-</option>
      <option value="O+">O+</option>
      <option value="O-">O-</option>
      <option value="AB+">AB+</option>
      <option value="AB-">AB-</option>
    </select>
  </div>
  <div class="form-group" style="font-family: cursive;  font-size: 20px;">
    <label>Need units of blood</label>
    <input required name="units" type="text" class="form-control">
  </div> 
  <div class="form-group" style="font-family: cursive;  font-size: 20px;">
    <label>Hospital Name and Address</label>
    <textarea required rows="4" name="nameandaddress" type="textbox" class="form-control"></textarea>
  </div> 
  <div class="form-group" style="font-family: cursive;  font-size: 20px;">
    <label>Doctor Name</label>
    <input required name="dname" type="text" class="form-control">
  </div> 
  <div class="form-group" style="font-family: cursive;  font-size: 20px;">
    <label>Required date</label>
    <input required name="reqdate" type="date" class="form-control">
  </div> 
  <div class="form-group" style="font-family: cursive;  font-size: 20px;">
    <label>Contact Name</label>
    <input required name="cname" type="text" class="form-control">
  </div> 
  <div class="form-group" style="font-family: cursive;  font-size: 20px;">
    <label>Address</label>
    <input required name="address" type="text" class="form-control">
  </div>
  <div class="form-group" style="font-family: cursive;  font-size: 20px;">
    <label>Phone no</label>
    <input required name="phone" type="text" class="form-control">
  </div> 
  <div class="form-group" style="font-family: cursive;  font-size: 20px;">
    <label>Email id</label>
    <input required name="mailid" type="text" class="form-control">
  </div> 
  <?php
    if ($err == 'empty'){
      ?>
      <div class="alert alert-danger" role="alert">
        <b>ERROR!</b> Fill all fields
      </div>
      <?php
    }
    else if($err == 'success'){
      ?>
      <div class="alert alert-success" role="alert">
        <b>SUCCESS!</b> New donor added.
      </div>
      <?php
    }
   ?>
  <a href="index.php">
  <button type="submit" name="req_donor" class="btn btn-primary btn-block" style="background:#A83E51; border:none;">Request Blood</button>
  </a>
</form>
</div> 
<!-- my code ends here -->
<?php include 'inc/footer1.php'; ?>

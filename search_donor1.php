<?php
$page = 'search_donor1';
include 'inc/header2.php';
?>
<!-- my code goes here -->

<?php
$option = '';
if (isset($_POST['search_donors'])) {
  $option = $_POST['group'];
}
?>

<div class="container">
  <div class="text-center mt-5">
    <p class="display-4" style="padding-top:85px; font-size: 40px; font-weight: bolder; color: #A83E51;">SEARCH REQUEST</p>
  </div>
  <form class="pt-2 pb-5 mx-auto form-inline" method="post" action="#" style="max-width: 400px; padding-left: 110px;">
  <div class="form-group">
    <select name="group" class="custom-select px-5 ml-3 mr-5" id="exampleFormControlSelect1" style="padding-left:120px;">>
      <option <?php echo $option=='A+'? 'selected': '' ?> value="A+">A+</option>
      <option <?php echo $option=='A-'? 'selected': '' ?> value="A-">A-</option>
      <option <?php echo $option=='B+'? 'selected': '' ?> value="B+">B+</option>
      <option <?php echo $option=='B-'? 'selected': '' ?> value="B-">B-</option>
      <option <?php echo $option=='O+'? 'selected': '' ?> value="O+">O+</option>
      <option <?php echo $option=='O-'? 'selected': '' ?> value="O-">O-</option>
      <option <?php echo $option=='AB+'? 'selected': '' ?> value="AB+">AB+</option>
      <option <?php echo $option=='AB-'? 'selected': '' ?> value="AB-">AB-</option>
    </select>
  </div>
  <button type="submit" name="search_donors" class="btn btn-primary px-5" style="background:#A83E51; border:none; margin-top: 30px; margin-left:-30px;">Search donors</button>
</form>
</div>

<div class="container mt-5 mb-5 pb-5">
  <table class="table table-striped">
    <thead>
      <tr style="background: #FCA4A6;">
        <th scope="col">Id</th> 
        <th scope="col">Patient Name</th>
        <th scope="col">Gender</th>
        <th scope="col">Blood Group</th>
        <th scope="col">Units</th> 
        <th scope="col">Phone No</th>  
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

<?php
if (isset($_POST['search_donors'])) {
  $_group = $_POST['group'];

  $sql = "SELECT * FROM req_donor WHERE bgroup='$_group';";
  $result = mysqli_query($conn, $sql);
  $result_check = mysqli_num_rows($result);

  if( $result_check > 0 ){
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
          <th scope="row"> <?php echo $row['id']; ?> </th>
          <td> <?php echo $row['pname']; ?> </td>
          <td> <?php echo $row['gender']; ?> </td>
          <td> <?php echo $row['bgroup']; ?> </td>
          <td> <?php echo $row['units']; ?> </td> 
          <td> <?php echo $row['phone']; ?> </td> 
          <td> <a class="btn btn-sm btn-secondary" style="background:#A83E51; border:none;" href="donor_data.php?id=<?php echo $row['id']; ?>">View details</a> </td>
        </tr>
        <?php
    }
  }
}
?>

</tbody>
</table>
</div>



<!-- my code ends here -->
<?php include 'inc/footer1.php'; ?>

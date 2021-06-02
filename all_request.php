<?php
$page = 'all_donors';
include 'inc/header2.php'; 
include  'connect.php';
?>
<!-- my code goes here -->
<div class="text-center mt-5">
  <p class="display-4" style="margin-top:80px; font-size: 40px; color:#A83E51; font-weight: bolder; padding-top: 50px;">ALL REQUEST LIST</p>
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
        <!--<th scope="col">Name and Address of hospital</th> 
        <th scope="col">Doctor Name</th>-->  
        <th scope="col">Required Date</th> 
        <!--<th scope="col">Contact Name</th> 
        <th scope="col">Address</th> 
        <th scope="col">Phone No</th> 
        <th scope="col">E-mail</th>-->     
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

<?php
  $sql = "SELECT * FROM req_donor;";
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
          <td> <?php echo $row['reqname']; ?> </td> 
          <td><a class="btn btn-sm btn-secondary"  style="background:#A83E51; border: none;" href="donor_data1.php?id=<?php echo $row['id']; ?>">View details</a> </td>
        </tr>
        <?php
    }
  }
?>

</tbody>
</table>
</div>



<!-- my code ends here -->
<?php include 'inc/footer1.php'; ?>

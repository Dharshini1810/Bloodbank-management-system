<?php
$page = 'deleted_donor1'; 
include 'inc/header2.php';
?>
<!-- my code goes here -->
<div class="text-center mt-5">
  <p class="display-4"  style="padding-top:95px; font-size: 40px; font-weight: bolder; color: #A83E51;">DELETED REQUEST LIST</p>
</div>
<div class="container mt-5 mb-5 pb-5">
  <table class="table table-striped">
    <thead>
      <tr style="background: #FCA4A6;">
        <th scope="col">Id</th>
        <th scope="col">Patient Name</th>
        <th scope="col">Gender</th>
        <th scope="col">Blood group</th>
        <th scope="col">Units</th>
        <th scope="col">Phone No</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

<?php
  if (isset($_GET['id'])) {
    $donor_id = $_GET['id'];
    $sql = "UPDATE req_donor WHERE id=$donor_id;";
    mysqli_query($conn, $sql);

    header('Location: service.php');
  }

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
          <td> <?php echo $row['phone']; ?> </td> 
          <td> <a class="btn btn-sm btn-success"  style="background:#A83E51; border:none;"  href="deleted_donor1.php?id=<?php echo $row['id']; ?>">Restore</a> </td>
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

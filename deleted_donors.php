<?php
$page = 'deleted_donors';
include 'inc/header.php';
?>
<!-- my code goes here -->
<div class="text-center mt-5">
  <p class="display-4"  style="padding-top:95px; font-size: 40px; font-weight: bolder; color: #A83E51;">DELETED DONOR LIST</p>
</div>
<div class="container mt-5 mb-5 pb-5">
  <table class="table table-striped">
    <thead>
      <tr style="background: #FCA4A6;">
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Blood group</th>
        <th scope="col">Age</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

<?php
  if (isset($_GET['id'])) {
    $donor_id = $_GET['id'];
    $sql = "UPDATE donor_list SET del=0 WHERE id=$donor_id;";
    mysqli_query($conn, $sql);

    // header('Location: index.php');
  }

  $sql = "SELECT * FROM donor_list WHERE del=1;";
  $result = mysqli_query($conn, $sql);
  $result_check = mysqli_num_rows($result);

  if( $result_check > 0 ){
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
          <th scope="row"> <?php echo $row['id']; ?> </th>
          <td> <?php echo $row['name']; ?> </td>
          <td> <?php echo $row['phone']; ?> </td>
          <td> <?php echo $row['blood_group']; ?> </td>
          <td> <?php echo $row['donation_count']; ?> </td>
          <td> <a class="btn btn-sm btn-success"  style="background:#A83E51; border:none;"  href="deleted_donors.php?id=<?php echo $row['id']; ?>">Restore</a> </td>
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

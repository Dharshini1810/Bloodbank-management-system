<?php 
    $pname = $_POST['pname']; 
    $gender = $_POST['gender'];
    $bgroup = $_POST['bgroup'];
    $units = $_POST['units'];
    $nameandaddress = $_POST['nameandaddress'];
    $dname = $_POST['dname'];
    $reqdate = $_POST['reqname'];
    $cname = $_POST['cname'];
    $address = $_POST['address'];
    $phone = $_POST['phone']; 
    $mailid = $_POST['mailid']; 

    //Database connection 
    $conn = new mysqli('localhost:3307','root','','service');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
    }    
    else {
		$stmt = $conn->prepare("insert into req_donor(pname, gender, bgroup, units, nameandaddress, dname, reqname, cname, address, phone, mailid) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssssssss" , $pname, $gender, $bgroup, $units, $nameandaddress, $dname, $reqname, $cname, $address, $phone, $mailid);
        $execval = $stmt->execute();  
		echo $execval;   
        $err = 'success';
    }      
?> 
<?php
if($err == 'success'){
?>
      <div class="alert alert-success" role="alert">
        <b>SUCCESS!</b> New donor added.
      </div>
      <?php
    }
?>
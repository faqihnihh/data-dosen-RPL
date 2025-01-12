<?php
// include database connection file
include_once("config.php");
 
// redirect
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$npp_dosen=$_POST['npp_dosen'];
	$nama_dosen=$_POST['nama_dosen'];
	$matkul_dosen=$_POST['matkul_dosen'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE users SET npp_dosen='$npp_dosen',matkul_dosen='$matkul_dosen',nama_dosen='$nama_dosen' WHERE id=$id");
	
	// Redirect 
	header("Location: index.php");
}
?>
<?php
// Display 

$id = $_GET['id'];
 
// Fetech 
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$npp_dosen = $user_data['npp_dosen'];
	$matkul_dosen = $user_data['matkul_dosen'];
	$nama_dosen = $user_data['nama_dosen'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
</head>

<style type="text/css">
.header {
  padding: 15px;
  
  text-align: center;
  background: #292F33;
  color: white;
  font-size: 10px;
}

body{

    background-image: url("images/bg1.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;  
    background-size: cover;    
    background-size: 100% 100%;
} 

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 0px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.contentkotak-edit{
    border-radius: 10px;
    background-color: white;
    margin: auto;
    padding-top: 10px; 
    padding-bottom: 15px;
    padding-right: 7px;
    padding-left: 10px;
    border: 2px solid #343a40;
}
</style>

<body >
<div class="header">

    <table align="center">
        <tr>
            <td><img src="images/hamzanwadi_logo.png" width="100px"></td>
            <td>  <h1 style="color: white">Lecturer List </h1>
  <p style="color: white"> HAMZANWADI UNIVERSITY</p></td>
        </tr>
    </table>

    

</div>
<div >
<div class="container">

  <div class="row">
    <div class="col-sm-4" ></div>
    <!-- COL SMALL 8 START -->
    <div class="col-sm-4" >
    	




	    <br>

		<div class="contentkotak-edit">
<!-- 			<p>Klik "BATAL" jika tidak jadi mengedit file.</p>
			<a href="index.php"><button type="button" class="btn btn-danger" href="index.php">BATAL</button></a> -->
			
			<br>

			<form name="update_user" method="post" action="edit.php">
				

				<div class="form-group">
					<label for="npp"> <strong><h5>NPP :</h5> </strong></label>
					<input type="text" class="form-control" id="npp" value="<?php echo $npp_dosen;?>" name="npp_dosen">
				</div>	

				<div class="form-group">
					<label for="nama"> <strong> <h5>NAME :</h5></strong></label>
					<input type="text" class="form-control" id="nama" value="<?php echo $nama_dosen;?>" name="nama_dosen">
				</div>	

				<div class="form-group">
					<label for="matkul"><strong> <h5>SUBJECT :</h5> </strong></label>
					<input type="text" class="form-control" id="matkul" value="<?php echo $matkul_dosen;?>" name="matkul_dosen">
				</div>	
				<div class="form-group" align="right">


					<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
					<button class="btn btn-success" name="update" type="submit"><i class="fa fa-check" style="font-size:25px;color:white"></i></button>


					<a href="index.php"><button class="btn btn-danger" type="button" href="index.php"><i class="fa fa-ban" style="font-size:25px;color:white"></i></button></a>
<!-- 
					<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
					<button type="submit"  class="btn btn-primary" name="update">Update</button>


					<a href="index.php"><button type="button" class="btn btn-danger" href="index.php">BATAL</button></a>
 -->
				</div>


		</div>
<hr>




    </div>
    <!-- COL SMALL 8 END -->
    <div class="col-sm-4" ></div>    
  </div>
</div>

</div>

</body>
</html>
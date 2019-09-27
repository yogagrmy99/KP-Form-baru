<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'yo'; // Nama Database
$id = $_GET["id"];

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung dengan MySQL: ' . mysqli_connect_error());	
}

$sql = "SELECT * 
		FROM register where id='$id'";
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html>
<head>
 <title>Edit Data</title>
</head>
<body>
 <h1>Edit Data Peserta</h1>
 <br>
 <?php 
  $query = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($query);
 ?>
 <form method="post" action='update.php?id=<?php echo $row['id']; ?>'>
  <label>ID</label><br>
  <input type="text" name="nim" value="<?php echo $row['id']; ?>"><br>
  <label>Nama</label><br>
  <input type="text" name="nama" value="<?php echo $row['full_name']; ?>"><br>
  <label>Email</label><br>
  <input type="text" name="nama" value="<?php echo $row['email']; ?>"><br>
  <label>Alamat</label><br>
  <input type="text" name="nama" value="<?php echo $row['st_address']; ?>"><br>
  <br>
  <input type="submit" name="simpan" value="Perbarui">
 </form>
</body>
</html>
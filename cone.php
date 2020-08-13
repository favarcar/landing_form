
<?php 
$cone = mysqli_connect("178.128.146.252", "admin_sigmauser", "pfaDKIJyPF", "admin_sigmatest"); 
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  mysqli_query($cone,"SET NAMES 'utf8'");
?>
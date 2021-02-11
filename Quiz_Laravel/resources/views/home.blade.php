<?php 
include 'conn.php';
$admin_email = Auth::user()->email;
//echo"$admin_email";
$query1="Select * from users where email='$admin_email'";
$stmt1= $conn->query($query1);
while($row1 = $stmt1->fetch())
{
    $role=$row1['role'];
}

//echo"$email,$role";

//header("location: ./index.php");
if($role == "User")
{
    ?>
    <script>window.location = "{{ URL::asset('UDashboard') }}";</script>
   <?php  
}
else if($role == "Admin")
{
?>

 <script>window.location = "{{ URL::asset('Admin_Dashboard') }}";</script>
   <?php  
}
?>




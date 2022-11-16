<?php
$conn = mysqli_connect("localhost","root","","imageuploads");
if ($conn) {
    echo "connection refuse";
}
else{
    echo "connection established";
}

$id =$_POST['id'];
$email =$_POST['txtemail'];
$password =$_POST['txtpassword'];
$image= $_FILES['image'];
$imagename = $image['name'];
$tempimagename = $image['tmp_name'];


$query = "UPDATE `user` SET `id`='$id',`email`='$email',`password`='$password',`image`='$name' WHERE id=$id";
$q = mysqli_query($conn,$query);
// $query ="UPDATE user SET `email`='$email',`Password`='$password' WHERE id=$id";
if(!$q){
    echo "bye";
}
else{
    echo 'hi';

  
}

?>
<script>
    window.location.assign("show.php");
</script>


<?php
$conn = mysqli_connect("localhost", "root", "", "imageuploads"); 

if (!$conn) {
    echo "connection refuse";
}
else {
    echo "connection established";
}


    $id = $_GET["id"];

    $query = "DELETE FROM `user` WHERE `id` = $id";

    mysqli_query($conn,$query);

    // header("Location: show.php");   

?>


<script>
    window.location.assign("show.php");
</script>
<?php
// include './connect.php';
$con = mysqli_connect('localhost', 'root', '', 'coffee');
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    // $id = $_POST['id'];
    $shift = $_POST['shift'];
    $sqlinsert = "INSERT into `manger` ( `mangername` , shift ) value ( '$name' , '$shift')";
    $resultinsert = mysqli_query($con, $sqlinsert);
    if ($resultinsert) {
        // echo '<div class="alert alert-success" role="alert"> the insert is succes </div>';
        header('location:manger.php');
    } else {
        echo "the insert is false";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>add your manger</title>
</head>
<body style="    background-repeat: no-repeat;
    background-image: url(./backgroud1.avif);
    background-size: 100%;">
    <h1 class="text-center mt-5 text-light">ADD YOUR manger</h1>
    <div class="container border border-primary">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" autocomplete="off" name="name">
            </div>
            <div class="form-group">
                <label>Shift</label>
                <input type="text" class="form-control" placeholder="Enter Your shift" autocomplete="off" name="shift">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

</html>
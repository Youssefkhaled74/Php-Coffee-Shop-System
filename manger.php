<?php
$con = mysqli_connect('localhost', 'root', '', 'coffee');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="./cssstaff.css">
    <title>manger</title>
</head>
<body>
    <div class="container mt-5">
        <a class="btn btn-primary mt-5" href="./addmanger.php">Add manger</a>
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Shift</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sqlselect = "SELECT * FROM `manger`";
                $resultselect = mysqli_query($con, $sqlselect);
                if ($resultselect) {
                    while ($row = mysqli_fetch_assoc($resultselect)) {
                        $id = $row['id'];
                        $name = $row['mangername'];
                        $shift =  $row['shift'];
                        echo ' <tr>
                        <th scope="row" class="bg-dark text-white">'.$id.'</th>
                        <td class="bg-dark text-white">'.$name.'</td>
                        <td class="bg-dark text-white">'.$shift.'</td>
                        <td>
                            <a href="updatemn.php?updatemnid='.$id.'" class="btn btn-primary" >Update</a>
                            <a href="deletemn.php?deletemnid='.$id.'" class="btn btn-danger">Delete</a>
                        </td>
                        </tr>
                        ';
   
                    }
                }
                ?>
                <!-- <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr> -->
            </tbody>
        </table>

    </div>








    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</body>

</html>
<?php
    session_start();
    if(!isset($_SESSION['member'])){
        echo '
            <script>
                alert("anda harus login");
                document.location="../loginn.php";
            </script>
        ';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Member</title>
</head>
<body>
    <center>
        <h3>INI HALAMAN MEMBER</h3>
        Anda login sebagai <?php echo $_SESSION['status']; ?> </br>
        <a href="../logout.php">LOGOUT</a>
    </center>
</body>
</html>
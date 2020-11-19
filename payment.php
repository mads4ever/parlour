<?php
    session_start();
    include ('header.php');
    $servername = "localhost";
    $username = "Aniket";
    $password = "Aniket1004";
    $dbname = "parlour";

    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if ($conn)
    {
        $query = "update customer set subscriber=true where email='$_SESSION[user]';";
        $result = mysqli_query($conn,$query);
        
        if ($result)
        {
            echo "<script type='text/javascript'>document.location.href='user.php';</script>";
        }
        else {
            echo "Not entered in database";
        }
        
    }
    include('footer.php');
?>
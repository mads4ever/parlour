<?php
    session_start();
    $flag = 0;
    if (isset($_POST['registerSubmit']))
    {
        if ($_POST['fullname'] == '' && $_POST['email'] == '' && $_POST['password'] == '' && $_POST['mobile'] == '')
        {
                $_SESSION['warning'] = "All fields are mandatory";
                $flag = 1;
        }
        else
        { 
            if ($_POST['fullname'] == '')
            {
                $_SESSION['nameWarning'] = "* Name field is mandatory";
                $flag = 1;
            }
            if ($_POST['password'] == '')
            {
                $_SESSION['passwordWarning'] = "* Password field is mandatory";
                $flag = 1;
            }
            if ($_POST['mobile'] == '')
            {
                $_SESSION['mobileWarning'] = "* Mobile field is mandatory";
                $flag = 1;
            }
            else if (!preg_match('/^[6-9]\d{9}$/',$_POST['mobile']))
            {
                $_SESSION['mobileWarning'] = "Invalid mobile";
                $flag = 1;
            }
            if ($_POST['email'] == '')
            {
                $_SESSION['emailWarning'] = "* Email field is mandatory";
                $flag = 1;
            }
            else if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
            {
                $_SESSION['emailWarning'] = "Invalid email";
                $flag = 1;
            }
        }
        if ($flag == 0)
        {
            $servername = "localhost";
            $username = "Aniket";
            $password = "Aniket1004";
            $dbname = "parlour";

            $conn = mysqli_connect($servername,$username,$password,$dbname);
            if ($conn)
            {
                $query = "select * from customer where email='$_POST[email]';";
                $result = mysqli_query($conn,$query);
                if (mysqli_num_rows($result) > 0)
                {
                    $_SESSION['warning'] = "Already registered through that email";
                    mysqli_close($conn);
                }
                else
                {
                    $query = "insert into customer (name,email,password,mob_no) values('$_POST[fullname]','$_POST[email]','$_POST[password]','$_POST[mobile]');";
                    if (mysqli_query($conn,$query))
                    {
                        $_SESSION['dbmsg'] = "Inserted";
                    }
                    else
                    {
                        $_SESSION['dbmsg'] = "Not inserted";
                    }
                }
            }
            else
            {
                $_SESSION['dbmsg'] = "not connected";
            }
        }
        header('Location: signup.php');
    }
    if (isset($_POST['loginSubmit']))
    {
        $flag = 0;
        if ($_POST['email'] == '')
        {
            $_SESSION['lwarning'] = "* All fields is mandatory";
            $flag = 1;
        }
        if ($_POST['password'] == '')
        {
            $_SESSION['lwarning'] = "* All fields is mandatory";
            $flag = 1;
        }
        if ($flag == 0)
        {
            $servername = "localhost";
            $username = "Aniket";
            $password = "Aniket1004";
            $dbname = "parlour";

            $conn = mysqli_connect($servername,$username,$password,$dbname);
            if ($conn)
            {
                $query = "select * from customer where email='$_POST[email]';";
                $result = mysqli_query($conn,$query);
                if (mysqli_num_rows($result) > 0)
                {
                    $query = "select * from customer where email='$_POST[email]' and password='$_POST[password]';";
                    $result = mysqli_query($conn,$query);
                    if (mysqli_num_rows($result) > 0)
                    {
                        $row = mysqli_fetch_row($result);
                        $_SESSION['user'] = $row[2];
                        mysqli_close($conn);
                        header('Location: user.php');    
                        exit(0);            
                    }               
                    else
                    {
                        $_SESSION['lwarning'] = "Invalid password";
         
                        mysqli_close($conn);
                    }
                }
                else
                {
                    $_SESSION['lwarning'] = 'Not registered. Sign up first';
                    mysqli_close($conn);
                }
            }
            else
            {
                $_SESSION['dbmsg'] = "not connected";
            }
        }
      header('Location: login.php');
    }
    if (isset($_GET['logout']))
    {
        unset($_SESSION['user']);
        header('Location: login.php');
    }
?>

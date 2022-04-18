<?php 
    session_start();
    $db = "localhost";
    $user = "root";
    $password = "";
    $name = "write";
    $conn = mysqli_connect($db, $user, $password, $name);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } 
    if(isset($_POST['submit'])){
        if($_POST['firstname'] == "" ||$_POST['email'] == "" ||$_POST['pass'] == ""){
            $_SESSION['error'] = "There cannot be empty fields";
            header("Location:write.php?erro=emptyfields&show=signup#signup_id");
            exit();
        } else {
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $_SESSION['error'] = "Make sure you enter a valid email";
                header("Location:write.php?erro=invalidemail&show=signup#signup_id");
                exit();
            } else {
                $sql = "SELECT * FROM users WHERE email='".$_POST['email']."'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0){
                    $_SESSION['error'] = "This email is already in use";
                    header("Location:write.php?erro=emailtaken&show=signup#signup_id");
                    exit();
                } else {
                    if($_POST['firstname'] == ""){
                        $_SESSION['error'] = "There cannot be empty fields";
                        header("Location:write.php?erro=emptyfields&show=signup#signup_id");
                        exit();
                    } else {
                        if($_POST['pass'] != $_POST['pass2']){
                            $_SESSION['error'] = "Make sure you enter the same password";
                            header("Location:write.php?erro=passwordcheck&show=signup#signup_id");
                            exit();
                        } else {
                            $sql = "INSERT INTO users (firstname, email, pass) VALUES ('".$_POST['firstname']."', '".$_POST['email']."', '".$_POST['pass']."')";
                            $result = mysqli_query($conn, $sql);
                            header("Location:write.php?erro=success&show=signup#signup_id");
                            exit();
                        }
                    }
                }
            }
        }
    } else {
        header("Location:write.php?erro=notsubmit&show=signup#signup_id");
        exit();
    }
?>
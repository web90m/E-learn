<?php
session_start();
include "db.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Fixed admin credentials
    if($role == "admin"){
        if($email == "ad@gmail.com" && $password == "admin12345"){
            $_SESSION['user_id'] = 1; // fixed id
            $_SESSION['user_name'] = "Admin";
            $_SESSION['user_role'] = "admin";
            header("Location: admin_dashboard.php");
            exit;
        } else {
            $_SESSION['error'] = "Invalid admin email or password!";
            header("Location: index.php");
            exit;
        }
    }

    // Trainer and Trainee login from DB
    $sql = "SELECT * FROM users WHERE email='$email' AND role='$role'";
    $result = $conn->query($sql);

    if($result->num_rows == 1){
        $user = $result->fetch_assoc();
        if(password_verify($password, $user['password'])){
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_role'] = $user['role'];

            if($role == "trainer"){
                header("Location: trainer_dashboard.php");
            } elseif($role == "trainee"){
                header("Location: trainee_dashboard.php");
            }
            exit;
        } else {
            $_SESSION['error'] = "Incorrect password!";
            header("Location: index.php");
        }
    } else {
        $_SESSION['error'] = "No user found with this email and role!";
        header("Location: index.php");
    }
}
?>


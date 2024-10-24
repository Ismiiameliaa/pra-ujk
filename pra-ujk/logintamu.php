<?php
session_start();
if(!empty($_SESSION['username'])){
    header('location:createtamu.php');
    exit();
}

$akun = [
    [
        "username"=>"mewww",
        "password"=>"1234"
    ],
];

$kondisi = 0;
if(isset($_POST['submit'])){
    $kondisi = 1;
    foreach ($akun as $akn){
        if($akn['username']==$_POST['username']&&$akn['password']==$_POST['password']){
            header('location: createtamu.php');
            $_SESSION['username']=$akn['username'];
        }else{
            $kondisi = 2;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <form action="" method="post">
        <h2>Login</h2>
        <div class="input-box">
            <label for="username">Username</label><br>
            <div class="input-container">
                <span class="icon"><i class='bx bxs-user'></i></span>
                <input type="username" id="username" name="username" placeholder="Username" required>
            </div>
        </div><br>
        <div class="input-box">
            <label for="password">Password</label><br>
            <span class="icon"><i class='bx bxs-lock-alt'></i></span>
            <input type="password" id="password" name="password" placeholder="Password" required>
        </div><br>
            <button type="submit" name="submit" class="btn">Log In</button>
    <?php if($kondisi==2) { ?>
        <script>alert("Check Again Your Username or Password!")</script>
    <?php } ?>
    </form>
</body>
</html>
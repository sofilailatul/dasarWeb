<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "prakwebdb"; 

$connect = mysqli_connect($servername, $username, $password, $dbname);

$username = $_POST['username']; 
$password = md5($_POST['password']);

$sql = "SELECT * FROM user WHERE username='$username' and password = '$password'";
$result = mysqli_query($connect, $sql);

if($result){
    if(mysqli_num_rows($result) > 0){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        ?>
        Anda Berhasil Login, silahkan menuju
        <a href="homeSession.php">Halaman HOME</a><?php
    }
} else { 
    ?>
    Gagal login, silahkan login lagi
    <a href="sessionLoginForm.html">Halaman Login</a><?php
    echo mysqli_error($connect);
}
?>
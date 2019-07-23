<?php
$a = $_SERVER['HTTP_REFERER'];

if (strpos($a, '/kitin/') !== false) {

} else {
header("Location: ../");
}

?>
<?php
include '../controller/db_conn.php';

$login = ltrim($_POST['login']);
$user_id_auth = rtrim($login);

$pass = ltrim($_POST['pass']);
$pass = rtrim($_POST['pass']);

$login = stripslashes($login);
$pass = stripslashes($pass);

$login = mysqli_real_escape_string($con, $login);
$pass = mysqli_real_escape_string($con, $pass);
$sql = "SELECT * FROM persona WHERE login='$login' and password='$pass'";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if ($count == 1) {
    $row = mysqli_fetch_assoc($result);
    session_start();
    // store session data
    $_SESSION['user_data'] = $login;
    $_SESSION['logged'] = "start";
    $_SESSION['auth_level'] = $row['tipo_persona'];
    $_SESSION['full_name'] = $row['name'];
    $auth_l_x = $_SESSION['auth_level'];
    if ($auth_l_x = 1) {
        header("location: ../app/dashboard.php");
    } else if ($auth_l_x = 2) {
        header("location: ../dashboard/member/");
    } else {
        header("location: ../app/");
    }
} else {
    include '../app/index.php';
    echo "<html><head><script>alert('Usuario O Contraseña Invalidos');</script></head></html>";
}
?>
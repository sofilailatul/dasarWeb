<?php
// soal no 21
// echo json_encode($_SERVER);

// soal no 22
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
if (isset($_SERVER['HTTP_REFERER'])) {
    echo $_SERVER['HTTP_REFERER'];
} else {
    echo "HTTP_REFERER tidak ada. <br>";
}
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
?>
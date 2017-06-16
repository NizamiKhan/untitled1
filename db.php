<?php
$connection = mysqli_connect(
    '127.0.0.1',
    'root',
    '',
    'test_blog'
);
if ($connection == false) {
    echo "Нет подключения!<br/>";
    echo mysqli_connect_error();
    exit();
}
?>
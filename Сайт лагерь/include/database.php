
<?php
$mysqli = mysqli_connect('localhost','root','','categories');
 $db_base = 'categories'; 
if (mysqli_connect_errno())
{
    echo 'Ошибка';
    exit();
}
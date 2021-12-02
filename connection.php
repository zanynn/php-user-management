<?php
$con  = mysqli_connect('localhost','root','','database');
if(mysqli_connect_errno())
{
    echo 'Database Connection Error';
}

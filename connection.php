<?php
/**
 * Created by PhpStorm.
 * User: Stefano
 * Date: 4-5-2015
 * Time: 23:08
 */

$db = mysqli_connect("localhost","root", "") or die("Could not connect.");

if(!$db)

    die("no db");

if(!mysqli_select_db($db,'bijnaweekend'))

    die("No database selected.");
?>
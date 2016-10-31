<?php

$url = "dblib:host=172.16.8.8;dbname=4yS4_SamedBeqari_webshop";
$usr = "Samed Beqari";
$pwd = "managementDatabase2015";

try {
    $dbh = new PDO($url, $usr, $pwd);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>

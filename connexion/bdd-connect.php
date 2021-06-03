<?php
    /*
    $host_name = 'db5002703504.hosting-data.io';
    $database = 'dbs2152536';
    $user_name = 'dbu1479767';
    $password = 'm2l-site1';
    $dbh = null;
    */

  $host_name = 'localhost';
  $database = 'm2l-site';
  $user_name = 'root';
  $password = '';
  $dbh = null;

  try {
    $dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
    $dbh->query("SET NAMES utf8");
  } catch (PDOException $e) {
    echo "Erreur!: " . $e->getMessage() . "<br/>";
    die();
  }
?>
<?php
  $servername = "sql310.epizy.com";
  $username = "epiz_32167599";
  $password = "";
  $db = "epiz_32167599_sch";

  $koneksi = new mysqli($servername, $username, $password, $db);

  if ($koneksi->connect_error) {
    die("connection failed: " . $koneksi->connect_error);
  }
?>
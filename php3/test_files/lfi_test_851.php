<?php
// LFI test variation #851
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
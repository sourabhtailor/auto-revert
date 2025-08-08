<?php
// LFI test variation #827
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
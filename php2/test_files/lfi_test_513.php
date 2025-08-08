<?php
// LFI test variation #513
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
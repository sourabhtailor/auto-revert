<?php
// LFI test variation #988
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
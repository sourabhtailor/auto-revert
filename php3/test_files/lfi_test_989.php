<?php
// LFI test variation #989
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
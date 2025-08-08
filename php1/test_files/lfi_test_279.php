<?php
// LFI test variation #279
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
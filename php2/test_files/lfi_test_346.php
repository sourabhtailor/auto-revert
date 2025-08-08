<?php
// LFI test variation #346
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
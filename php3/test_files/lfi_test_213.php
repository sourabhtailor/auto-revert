<?php
// LFI test variation #213
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
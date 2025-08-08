<?php
// LFI test variation #904
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
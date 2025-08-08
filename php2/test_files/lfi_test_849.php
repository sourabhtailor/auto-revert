<?php
// LFI test variation #849
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
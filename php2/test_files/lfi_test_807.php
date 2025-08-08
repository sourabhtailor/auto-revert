<?php
// LFI test variation #807
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
<?php
// LFI test variation #692
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
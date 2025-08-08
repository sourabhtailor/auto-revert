<?php
// LFI test variation #928
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
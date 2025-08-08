<?php
// LFI test variation #756
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
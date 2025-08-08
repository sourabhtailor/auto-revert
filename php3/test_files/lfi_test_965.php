<?php
// LFI test variation #965
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
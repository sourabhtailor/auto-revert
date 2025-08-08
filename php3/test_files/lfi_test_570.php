<?php
// LFI test variation #570
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
<?php
// LFI test variation #656
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
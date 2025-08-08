<?php
// LFI test variation #152
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
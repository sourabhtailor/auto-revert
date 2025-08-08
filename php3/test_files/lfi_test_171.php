<?php
// LFI test variation #171
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
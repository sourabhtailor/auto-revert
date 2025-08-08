<?php
// LFI test variation #1334
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
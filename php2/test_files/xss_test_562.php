<?php
// XSS test variation #562
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
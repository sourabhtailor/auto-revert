<?php
// XSS test variation #1410
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
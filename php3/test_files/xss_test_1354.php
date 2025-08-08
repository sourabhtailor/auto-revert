<?php
// XSS test variation #1354
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
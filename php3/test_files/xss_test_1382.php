<?php
// XSS test variation #1382
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
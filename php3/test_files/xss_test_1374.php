<?php
// XSS test variation #1374
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #1323
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
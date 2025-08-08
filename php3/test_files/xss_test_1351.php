<?php
// XSS test variation #1351
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
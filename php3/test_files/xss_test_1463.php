<?php
// XSS test variation #1463
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
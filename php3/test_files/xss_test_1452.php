<?php
// XSS test variation #1452
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
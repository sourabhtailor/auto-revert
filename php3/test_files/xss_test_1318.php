<?php
// XSS test variation #1318
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
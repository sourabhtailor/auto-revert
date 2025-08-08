<?php
// XSS test variation #1364
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
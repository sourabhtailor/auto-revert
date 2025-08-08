<?php
// XSS test variation #611
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #973
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
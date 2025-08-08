<?php
// XSS test variation #1051
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
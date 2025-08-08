<?php
// XSS test variation #1110
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
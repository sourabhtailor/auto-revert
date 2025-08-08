<?php
// XSS test variation #1210
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
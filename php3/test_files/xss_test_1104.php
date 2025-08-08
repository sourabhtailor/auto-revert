<?php
// XSS test variation #1104
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
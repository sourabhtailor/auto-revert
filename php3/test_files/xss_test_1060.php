<?php
// XSS test variation #1060
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
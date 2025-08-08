<?php
// XSS test variation #1183
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
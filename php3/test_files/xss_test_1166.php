<?php
// XSS test variation #1166
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
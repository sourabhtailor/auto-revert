<?php
// XSS test variation #1056
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
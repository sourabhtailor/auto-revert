<?php
// XSS test variation #1257
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
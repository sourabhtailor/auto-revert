<?php
// XSS test variation #217
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
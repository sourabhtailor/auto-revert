<?php
// XSS test variation #194
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
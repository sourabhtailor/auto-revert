<?php
// XSS test variation #1205
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
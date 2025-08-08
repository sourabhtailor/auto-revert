<?php
// XSS test variation #1154
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
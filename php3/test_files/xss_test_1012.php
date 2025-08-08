<?php
// XSS test variation #1012
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
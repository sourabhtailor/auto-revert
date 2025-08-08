<?php
// XSS test variation #1033
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
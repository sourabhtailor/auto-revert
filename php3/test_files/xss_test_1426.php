<?php
// XSS test variation #1426
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #1052
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
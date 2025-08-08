<?php
// XSS test variation #1235
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #1036
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
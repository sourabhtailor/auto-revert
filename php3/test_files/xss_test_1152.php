<?php
// XSS test variation #1152
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #99
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
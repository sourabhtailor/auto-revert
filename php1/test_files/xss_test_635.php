<?php
// XSS test variation #635
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
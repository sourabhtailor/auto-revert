<?php
// XSS test variation #740
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #292
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
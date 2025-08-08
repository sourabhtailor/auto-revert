<?php
// XSS test variation #917
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #1167
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
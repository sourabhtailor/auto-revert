<?php
// XSS test variation #1177
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
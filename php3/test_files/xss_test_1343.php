<?php
// XSS test variation #1343
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
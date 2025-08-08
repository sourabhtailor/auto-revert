<?php
// XSS test variation #1243
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
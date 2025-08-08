<?php
// XSS test variation #1276
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
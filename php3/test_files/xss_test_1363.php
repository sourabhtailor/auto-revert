<?php
// XSS test variation #1363
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
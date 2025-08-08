<?php
// XSS test variation #1329
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
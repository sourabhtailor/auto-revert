<?php
// XSS test variation #1378
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
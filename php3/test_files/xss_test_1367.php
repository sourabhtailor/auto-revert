<?php
// XSS test variation #1367
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
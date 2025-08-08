<?php
// XSS test variation #1424
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
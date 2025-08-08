<?php
// XSS test variation #1320
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
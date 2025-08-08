<?php
// XSS test variation #283
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
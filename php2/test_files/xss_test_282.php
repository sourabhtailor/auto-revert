<?php
// XSS test variation #282
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
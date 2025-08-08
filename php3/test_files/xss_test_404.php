<?php
// XSS test variation #404
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
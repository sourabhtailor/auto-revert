<?php
// XSS test variation #523
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
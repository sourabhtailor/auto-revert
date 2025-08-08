<?php
// XSS test variation #1285
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
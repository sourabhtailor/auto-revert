<?php
// XSS test variation #1352
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
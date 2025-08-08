<?php
// XSS test variation #1199
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
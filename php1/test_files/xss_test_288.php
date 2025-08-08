<?php
// XSS test variation #288
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
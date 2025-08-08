<?php
// XSS test variation #1212
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
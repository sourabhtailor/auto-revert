<?php
// XSS test variation #106
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
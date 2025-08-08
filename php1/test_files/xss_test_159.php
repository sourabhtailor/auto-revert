<?php
// XSS test variation #159
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
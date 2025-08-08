<?php
// XSS test variation #1173
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
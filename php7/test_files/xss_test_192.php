<?php
// XSS test variation #192
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
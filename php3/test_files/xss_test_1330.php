<?php
// XSS test variation #1330
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #205
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
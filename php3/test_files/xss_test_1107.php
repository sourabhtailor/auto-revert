<?php
// XSS test variation #1107
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
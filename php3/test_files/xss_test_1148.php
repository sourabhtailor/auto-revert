<?php
// XSS test variation #1148
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
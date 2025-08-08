<?php
// XSS test variation #1185
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
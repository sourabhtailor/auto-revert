<?php
// XSS test variation #1160
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
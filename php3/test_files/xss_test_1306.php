<?php
// XSS test variation #1306
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
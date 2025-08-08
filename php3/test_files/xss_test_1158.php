<?php
// XSS test variation #1158
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
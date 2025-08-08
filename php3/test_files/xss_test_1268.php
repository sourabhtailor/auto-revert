<?php
// XSS test variation #1268
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
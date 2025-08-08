<?php
// XSS test variation #1187
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
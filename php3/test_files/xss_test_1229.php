<?php
// XSS test variation #1229
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
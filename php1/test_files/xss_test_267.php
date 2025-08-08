<?php
// XSS test variation #267
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
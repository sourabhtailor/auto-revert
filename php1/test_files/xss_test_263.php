<?php
// XSS test variation #263
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
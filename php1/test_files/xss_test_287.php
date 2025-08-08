<?php
// XSS test variation #287
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
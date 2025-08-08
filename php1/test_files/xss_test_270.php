<?php
// XSS test variation #270
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
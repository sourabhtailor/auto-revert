<?php
// XSS test variation #251
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
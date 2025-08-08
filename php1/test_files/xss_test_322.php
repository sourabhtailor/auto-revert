<?php
// XSS test variation #322
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
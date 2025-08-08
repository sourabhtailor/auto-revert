<?php
// XSS test variation #550
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
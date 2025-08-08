<?php
// XSS test variation #265
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
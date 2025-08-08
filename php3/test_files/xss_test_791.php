<?php
// XSS test variation #791
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
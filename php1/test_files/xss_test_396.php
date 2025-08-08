<?php
// XSS test variation #396
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
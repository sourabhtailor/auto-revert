<?php
// XSS test variation #150
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
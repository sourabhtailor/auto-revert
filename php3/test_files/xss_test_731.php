<?php
// XSS test variation #731
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
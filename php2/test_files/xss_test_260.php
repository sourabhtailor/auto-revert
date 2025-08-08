<?php
// XSS test variation #260
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
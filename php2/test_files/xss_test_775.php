<?php
// XSS test variation #775
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
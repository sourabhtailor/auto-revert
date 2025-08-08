<?php
// XSS test variation #1432
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
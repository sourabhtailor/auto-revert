<?php
// XSS test variation #1058
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #1028
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
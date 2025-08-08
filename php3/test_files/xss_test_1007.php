<?php
// XSS test variation #1007
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
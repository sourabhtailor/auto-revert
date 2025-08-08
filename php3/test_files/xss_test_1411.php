<?php
// XSS test variation #1411
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
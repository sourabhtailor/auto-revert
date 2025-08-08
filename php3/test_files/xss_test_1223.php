<?php
// XSS test variation #1223
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
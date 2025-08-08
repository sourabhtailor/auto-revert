<?php
// XSS test variation #1284
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
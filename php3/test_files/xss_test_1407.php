<?php
// XSS test variation #1407
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
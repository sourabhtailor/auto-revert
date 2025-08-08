<?php
// XSS test variation #1461
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
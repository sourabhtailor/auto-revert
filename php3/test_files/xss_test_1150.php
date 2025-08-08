<?php
// XSS test variation #1150
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
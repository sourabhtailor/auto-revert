<?php
// XSS test variation #1405
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
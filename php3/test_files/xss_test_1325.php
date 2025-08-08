<?php
// XSS test variation #1325
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
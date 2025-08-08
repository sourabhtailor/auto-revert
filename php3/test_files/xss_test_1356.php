<?php
// XSS test variation #1356
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
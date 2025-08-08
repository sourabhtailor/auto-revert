<?php
// XSS test variation #559
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
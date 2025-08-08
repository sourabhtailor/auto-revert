<?php
// XSS test variation #499
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
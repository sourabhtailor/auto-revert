<?php
// XSS test variation #586
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
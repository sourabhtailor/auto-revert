<?php
// XSS test variation #832
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
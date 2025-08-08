<?php
// XSS test variation #459
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
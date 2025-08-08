<?php
// XSS test variation #782
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
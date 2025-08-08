<?php
// XSS test variation #690
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
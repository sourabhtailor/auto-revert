<?php
// XSS test variation #696
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
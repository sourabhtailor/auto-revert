<?php
// XSS test variation #609
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
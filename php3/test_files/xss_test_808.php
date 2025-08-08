<?php
// XSS test variation #808
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
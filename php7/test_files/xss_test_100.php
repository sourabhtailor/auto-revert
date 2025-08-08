<?php
// XSS test variation #100
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
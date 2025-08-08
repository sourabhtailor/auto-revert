<?php
// XSS test variation #679
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
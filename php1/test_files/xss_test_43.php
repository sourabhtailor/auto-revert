<?php
// XSS test variation #43
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
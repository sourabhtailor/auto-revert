<?php
// XSS test variation #49
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
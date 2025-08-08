<?php
// XSS test variation #50
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #834
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
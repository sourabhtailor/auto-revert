<?php
// XSS test variation #852
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
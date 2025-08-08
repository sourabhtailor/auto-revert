<?php
// XSS test variation #58
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
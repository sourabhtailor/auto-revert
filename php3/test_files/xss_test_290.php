<?php
// XSS test variation #290
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
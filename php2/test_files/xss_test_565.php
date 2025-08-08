<?php
// XSS test variation #565
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #897
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #72
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #250
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
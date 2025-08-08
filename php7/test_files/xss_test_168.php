<?php
// XSS test variation #168
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
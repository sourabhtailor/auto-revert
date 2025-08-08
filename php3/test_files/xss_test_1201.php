<?php
// XSS test variation #1201
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
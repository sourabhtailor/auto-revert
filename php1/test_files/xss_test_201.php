<?php
// XSS test variation #201
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
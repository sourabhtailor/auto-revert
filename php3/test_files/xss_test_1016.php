<?php
// XSS test variation #1016
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #255
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
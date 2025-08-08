<?php
// XSS test variation #271
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
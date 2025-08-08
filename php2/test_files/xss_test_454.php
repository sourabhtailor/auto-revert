<?php
// XSS test variation #454
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
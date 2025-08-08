<?php
// XSS test variation #774
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
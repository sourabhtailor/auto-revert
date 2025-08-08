<?php
// XSS test variation #749
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
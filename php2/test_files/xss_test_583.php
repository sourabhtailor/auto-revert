<?php
// XSS test variation #583
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
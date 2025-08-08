<?php
// XSS test variation #64
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
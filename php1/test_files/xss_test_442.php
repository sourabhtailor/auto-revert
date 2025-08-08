<?php
// XSS test variation #442
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
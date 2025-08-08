<?php
// XSS test variation #501
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #77
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
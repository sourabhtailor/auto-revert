<?php
// XSS test variation #883
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #932
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
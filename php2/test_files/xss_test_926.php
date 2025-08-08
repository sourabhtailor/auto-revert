<?php
// XSS test variation #926
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
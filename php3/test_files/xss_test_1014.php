<?php
// XSS test variation #1014
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
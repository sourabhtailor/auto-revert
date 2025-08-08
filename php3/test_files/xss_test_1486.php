<?php
// XSS test variation #1486
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
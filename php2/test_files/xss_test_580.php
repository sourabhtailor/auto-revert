<?php
// XSS test variation #580
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
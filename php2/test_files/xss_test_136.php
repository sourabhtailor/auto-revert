<?php
// XSS test variation #136
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #78
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
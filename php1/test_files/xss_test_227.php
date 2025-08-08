<?php
// XSS test variation #227
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
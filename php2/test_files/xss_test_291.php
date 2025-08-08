<?php
// XSS test variation #291
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
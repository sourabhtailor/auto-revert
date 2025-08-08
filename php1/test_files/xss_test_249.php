<?php
// XSS test variation #249
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
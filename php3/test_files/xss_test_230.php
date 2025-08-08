<?php
// XSS test variation #230
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #920
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
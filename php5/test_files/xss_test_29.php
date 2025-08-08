<?php
// XSS test variation #29
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
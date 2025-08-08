<?php
// XSS test variation #482
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
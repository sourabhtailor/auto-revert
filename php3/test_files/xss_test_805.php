<?php
// XSS test variation #805
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
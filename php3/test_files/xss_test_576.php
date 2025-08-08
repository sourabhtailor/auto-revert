<?php
// XSS test variation #576
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
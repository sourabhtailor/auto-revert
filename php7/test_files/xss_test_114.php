<?php
// XSS test variation #114
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
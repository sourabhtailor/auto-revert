<?php
// XSS test variation #1300
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #1399
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
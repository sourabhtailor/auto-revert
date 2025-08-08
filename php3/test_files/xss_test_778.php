<?php
// XSS test variation #778
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #608
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
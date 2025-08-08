<?php
// XSS test variation #329
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
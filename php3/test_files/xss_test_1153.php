<?php
// XSS test variation #1153
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
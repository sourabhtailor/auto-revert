<?php
// XSS test variation #975
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
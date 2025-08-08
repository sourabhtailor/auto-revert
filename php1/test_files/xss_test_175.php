<?php
// XSS test variation #175
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
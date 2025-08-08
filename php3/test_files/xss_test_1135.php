<?php
// XSS test variation #1135
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
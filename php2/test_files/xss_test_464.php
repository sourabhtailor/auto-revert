<?php
// XSS test variation #464
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
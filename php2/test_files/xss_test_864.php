<?php
// XSS test variation #864
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #37
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
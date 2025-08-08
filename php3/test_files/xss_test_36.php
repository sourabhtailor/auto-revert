<?php
// XSS test variation #36
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
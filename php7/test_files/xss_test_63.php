<?php
// XSS test variation #63
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
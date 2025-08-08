<?php
// XSS test variation #420
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
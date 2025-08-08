<?php
// XSS test variation #7
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
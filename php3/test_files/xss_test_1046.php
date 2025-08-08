<?php
// XSS test variation #1046
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
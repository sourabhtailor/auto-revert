<?php
// XSS test variation #23
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
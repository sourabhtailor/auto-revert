<?php
// XSS test variation #1430
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
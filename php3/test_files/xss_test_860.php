<?php
// XSS test variation #860
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #439
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
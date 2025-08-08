<?php
// XSS test variation #376
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
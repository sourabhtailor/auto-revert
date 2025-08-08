<?php
// XSS test variation #1480
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
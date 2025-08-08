<?php
// XSS test variation #510
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
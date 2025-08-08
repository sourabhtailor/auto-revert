<?php
// XSS test variation #625
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
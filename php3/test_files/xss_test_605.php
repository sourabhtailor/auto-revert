<?php
// XSS test variation #605
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
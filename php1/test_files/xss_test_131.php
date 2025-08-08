<?php
// XSS test variation #131
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
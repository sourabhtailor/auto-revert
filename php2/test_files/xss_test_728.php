<?php
// XSS test variation #728
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
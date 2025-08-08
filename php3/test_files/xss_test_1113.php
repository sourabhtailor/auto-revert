<?php
// XSS test variation #1113
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
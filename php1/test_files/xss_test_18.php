<?php
// XSS test variation #18
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
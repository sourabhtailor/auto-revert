<?php
// XSS test variation #143
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #39
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
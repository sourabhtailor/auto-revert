<?php
// XSS test variation #405
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
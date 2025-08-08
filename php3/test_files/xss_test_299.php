<?php
// XSS test variation #299
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
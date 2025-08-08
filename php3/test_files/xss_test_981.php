<?php
// XSS test variation #981
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
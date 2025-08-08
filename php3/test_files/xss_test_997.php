<?php
// XSS test variation #997
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
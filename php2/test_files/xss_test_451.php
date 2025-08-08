<?php
// XSS test variation #451
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
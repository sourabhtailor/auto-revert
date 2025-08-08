<?php
// XSS test variation #343
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
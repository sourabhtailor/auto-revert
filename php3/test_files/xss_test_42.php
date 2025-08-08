<?php
// XSS test variation #42
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #273
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
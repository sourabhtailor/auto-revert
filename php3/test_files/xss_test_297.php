<?php
// XSS test variation #297
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
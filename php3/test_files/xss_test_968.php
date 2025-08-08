<?php
// XSS test variation #968
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
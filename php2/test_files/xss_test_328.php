<?php
// XSS test variation #328
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
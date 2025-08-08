<?php
// XSS test variation #1355
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
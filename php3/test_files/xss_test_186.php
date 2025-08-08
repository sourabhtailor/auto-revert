<?php
// XSS test variation #186
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
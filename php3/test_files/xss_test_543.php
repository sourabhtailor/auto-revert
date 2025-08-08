<?php
// XSS test variation #543
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
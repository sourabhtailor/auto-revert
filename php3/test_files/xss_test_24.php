<?php
// XSS test variation #24
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
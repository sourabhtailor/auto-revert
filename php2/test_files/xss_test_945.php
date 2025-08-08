<?php
// XSS test variation #945
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
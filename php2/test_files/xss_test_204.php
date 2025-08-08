<?php
// XSS test variation #204
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
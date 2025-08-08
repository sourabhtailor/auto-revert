<?php
// XSS test variation #794
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
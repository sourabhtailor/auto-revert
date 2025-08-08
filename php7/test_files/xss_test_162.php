<?php
// XSS test variation #162
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
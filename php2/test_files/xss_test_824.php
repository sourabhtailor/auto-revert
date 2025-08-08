<?php
// XSS test variation #824
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
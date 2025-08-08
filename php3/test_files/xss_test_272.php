<?php
// XSS test variation #272
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
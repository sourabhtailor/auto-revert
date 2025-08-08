<?php
// XSS test variation #664
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
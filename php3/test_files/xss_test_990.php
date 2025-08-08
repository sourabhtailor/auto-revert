<?php
// XSS test variation #990
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
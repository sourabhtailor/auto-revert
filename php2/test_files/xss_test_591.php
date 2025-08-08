<?php
// XSS test variation #591
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
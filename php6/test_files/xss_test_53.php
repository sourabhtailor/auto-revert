<?php
// XSS test variation #53
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
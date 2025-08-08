<?php
// XSS test variation #321
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
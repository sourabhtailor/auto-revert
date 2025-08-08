<?php
// XSS test variation #863
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
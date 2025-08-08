<?php
// XSS test variation #734
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
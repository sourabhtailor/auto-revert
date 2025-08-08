<?php
// XSS test variation #789
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
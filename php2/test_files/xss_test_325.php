<?php
// XSS test variation #325
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #1178
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
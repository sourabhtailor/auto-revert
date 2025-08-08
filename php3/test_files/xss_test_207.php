<?php
// XSS test variation #207
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
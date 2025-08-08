<?php
// XSS test variation #246
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
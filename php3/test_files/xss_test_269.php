<?php
// XSS test variation #269
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #715
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
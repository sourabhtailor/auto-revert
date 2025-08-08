<?php
// XSS test variation #1389
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
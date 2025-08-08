<?php
// XSS test variation #666
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
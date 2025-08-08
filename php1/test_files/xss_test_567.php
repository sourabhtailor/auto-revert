<?php
// XSS test variation #567
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
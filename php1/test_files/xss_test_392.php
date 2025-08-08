<?php
// XSS test variation #392
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
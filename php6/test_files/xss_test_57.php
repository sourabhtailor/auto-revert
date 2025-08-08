<?php
// XSS test variation #57
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #164
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
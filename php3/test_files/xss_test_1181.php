<?php
// XSS test variation #1181
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
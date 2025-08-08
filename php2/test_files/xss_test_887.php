<?php
// XSS test variation #887
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #248
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
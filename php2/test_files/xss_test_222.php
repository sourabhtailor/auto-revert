<?php
// XSS test variation #222
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
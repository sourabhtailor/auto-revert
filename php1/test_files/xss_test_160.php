<?php
// XSS test variation #160
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #141
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
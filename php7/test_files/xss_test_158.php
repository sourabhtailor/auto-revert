<?php
// XSS test variation #158
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
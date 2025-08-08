<?php
// XSS test variation #195
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
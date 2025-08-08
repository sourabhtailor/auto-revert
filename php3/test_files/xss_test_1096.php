<?php
// XSS test variation #1096
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
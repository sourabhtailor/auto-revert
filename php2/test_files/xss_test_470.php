<?php
// XSS test variation #470
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
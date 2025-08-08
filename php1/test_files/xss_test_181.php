<?php
// XSS test variation #181
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
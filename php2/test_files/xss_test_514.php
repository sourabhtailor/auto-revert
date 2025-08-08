<?php
// XSS test variation #514
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #536
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
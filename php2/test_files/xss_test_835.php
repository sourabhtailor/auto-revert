<?php
// XSS test variation #835
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
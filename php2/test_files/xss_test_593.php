<?php
// XSS test variation #593
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
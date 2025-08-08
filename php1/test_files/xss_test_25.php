<?php
// XSS test variation #25
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
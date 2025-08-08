<?php
// XSS test variation #793
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
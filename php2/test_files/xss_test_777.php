<?php
// XSS test variation #777
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
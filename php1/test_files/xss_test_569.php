<?php
// XSS test variation #569
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
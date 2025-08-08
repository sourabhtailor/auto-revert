<?php
// XSS test variation #494
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
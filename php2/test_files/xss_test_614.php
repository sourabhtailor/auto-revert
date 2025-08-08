<?php
// XSS test variation #614
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
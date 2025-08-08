<?php
// XSS test variation #770
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
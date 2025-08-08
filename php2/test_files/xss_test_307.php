<?php
// XSS test variation #307
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
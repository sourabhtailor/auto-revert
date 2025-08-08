<?php
// XSS test variation #144
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
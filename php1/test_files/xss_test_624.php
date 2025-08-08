<?php
// XSS test variation #624
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
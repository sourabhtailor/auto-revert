<?php
// XSS test variation #352
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
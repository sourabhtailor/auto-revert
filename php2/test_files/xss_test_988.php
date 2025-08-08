<?php
// XSS test variation #988
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
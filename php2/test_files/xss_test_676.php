<?php
// XSS test variation #676
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
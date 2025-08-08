<?php
// XSS test variation #929
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
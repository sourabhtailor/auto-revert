<?php
// XSS test variation #798
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
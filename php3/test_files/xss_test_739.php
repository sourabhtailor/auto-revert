<?php
// XSS test variation #739
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
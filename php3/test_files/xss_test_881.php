<?php
// XSS test variation #881
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
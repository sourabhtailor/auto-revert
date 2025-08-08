<?php
// XSS test variation #628
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
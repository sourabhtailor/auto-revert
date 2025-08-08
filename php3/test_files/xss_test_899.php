<?php
// XSS test variation #899
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #843
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
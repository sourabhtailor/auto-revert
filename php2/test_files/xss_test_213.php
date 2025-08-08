<?php
// XSS test variation #213
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
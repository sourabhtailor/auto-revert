<?php
// XSS test variation #512
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
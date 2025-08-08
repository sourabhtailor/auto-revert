<?php
// XSS test variation #821
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
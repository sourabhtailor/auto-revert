<?php
// XSS test variation #928
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #955
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
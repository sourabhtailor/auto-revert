<?php
// XSS test variation #806
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
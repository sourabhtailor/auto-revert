<?php
// XSS test variation #601
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
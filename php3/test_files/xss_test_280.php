<?php
// XSS test variation #280
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
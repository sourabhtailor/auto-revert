<?php
// XSS test variation #707
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
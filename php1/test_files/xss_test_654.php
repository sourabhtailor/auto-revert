<?php
// XSS test variation #654
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
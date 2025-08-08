<?php
// XSS test variation #489
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
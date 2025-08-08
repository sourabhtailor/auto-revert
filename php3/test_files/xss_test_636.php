<?php
// XSS test variation #636
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #898
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
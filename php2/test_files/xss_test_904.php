<?php
// XSS test variation #904
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
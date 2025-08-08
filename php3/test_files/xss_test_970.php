<?php
// XSS test variation #970
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
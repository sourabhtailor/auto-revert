<?php
// Simple XSS test
$input = $_GET['input'] ?? '';
echo "Output: " . $input;
?>
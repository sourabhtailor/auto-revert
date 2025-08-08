<?php
// Eval injection test variation #242
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>
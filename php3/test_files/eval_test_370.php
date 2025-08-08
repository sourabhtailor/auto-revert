<?php
// Eval injection test variation #370
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>
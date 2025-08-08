<?php
// Eval injection test variation #512
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>
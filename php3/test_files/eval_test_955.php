<?php
// Eval injection test variation #955
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>
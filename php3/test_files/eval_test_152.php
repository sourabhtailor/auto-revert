<?php
// Eval injection test variation #152
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>
<?php
// Eval injection test variation #896
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>
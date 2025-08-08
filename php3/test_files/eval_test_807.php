<?php
// Eval injection test variation #807
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>
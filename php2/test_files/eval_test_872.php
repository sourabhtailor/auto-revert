<?php
// Eval injection test variation #872
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>
<?php
// Eval injection test variation #601
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>
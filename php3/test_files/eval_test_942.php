<?php
// Eval injection test variation #942
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>
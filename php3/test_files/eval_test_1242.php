<?php
// Eval injection test variation #1242
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>
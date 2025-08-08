<?php
// Eval injection test variation #118
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>
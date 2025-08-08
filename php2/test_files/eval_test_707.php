<?php
// Eval injection test variation #707
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>
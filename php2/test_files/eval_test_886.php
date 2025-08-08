<?php
// Eval injection test variation #886
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>
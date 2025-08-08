<?php
// Eval injection test variation #788
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>
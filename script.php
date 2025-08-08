!/usr/bin/env php
<?php
$dir = __DIR__ . '/generated_files';

// Create directory if it doesn't exist
if (!is_dir($dir)) {
    mkdir($dir, 0777, true);
    }

    $fileCount = 1000; // number of files to generate

    for ($i = 1; $i <= $fileCount; $i++) {
        $filename = $dir . "/file_$i.php";

            $content = "<?php\n";
                $content .= "/**\n * Dummy PHP file number $i\n */\n\n";
                    $content .= "function dummyFunction$i() {\n";
                        $content .= "    // Simulate some code\n";
                            $content .= "    for (\$j = 0; \$j < 10; \$j++) {\n";
                                $content .= "        echo 'This is dummy function $i, iteration ' . \$j . \"\\n\";\n";
                                    $content .= "    }\n";
                                        $content .= "}\n";

                                            file_put_contents($filename, $content);
                                            }

                                            echo "Generated $fileCount PHP files in $dir\n";

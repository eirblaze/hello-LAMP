<?php
/**
 * ## エラーを発生させる
 * ### 参考
 * - [Apache のログレベルと PHP エラーログの関係](https://qiita.com/bezeklik/items/4d6dd9563cd907f5a69c)
 * > デフォルトでは PHP のエラーは Apache のエラーログ /var/log/httpd/error_log に出力される。
 * > この場合、PHP のエラー出力が Apache の LogLevel の設定に影響を受けるのかを検証した。
 */
error_log('hellow error log');
~                                // PHP Parse error
$d =& dir('/');                  // PHP Strict Standards
set_magic_quotes_runtime(false); // PHP Deprecated
echo $undefined;                 // PHP Notice
ini_set();                       // PHP Warning
undefined();                     // PHP Fatal error

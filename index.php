<?php
if (version_compare(PHP_VERSION, '7.4.0', '>=')
&& version_compare(PHP_VERSION, '7.5.0', '<=')) {
    echo PHP_VERSION;
}

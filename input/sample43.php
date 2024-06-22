<?php

try {
    echo 4 / 0;
} catch (\Throwable $th) {
    echo "0で割ることは出来ません";
}

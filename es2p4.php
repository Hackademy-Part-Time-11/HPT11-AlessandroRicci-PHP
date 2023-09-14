<?php

$temperatura = 24;

if ($temperatura <15 ) {
    echo 'fa freddo';
} elseif ($temperatura >= 15 && $temperatura <25) {
    echo 'fa caldo';
} else {
    echo 'fa molto caldo';
}
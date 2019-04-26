<?php

asort($prices);
foreach ($prices as $key => $val) {
    echo "$key = $val";
}
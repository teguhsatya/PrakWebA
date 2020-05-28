<?php

function isAvailable($condition)
{
    if ($condition == 0) {
        echo '<span class="badge badge-success">Tersedia</span>';
    }else{
        echo '<span class="badge badge-danger">Tidak Tersedia</span>';
    }
}
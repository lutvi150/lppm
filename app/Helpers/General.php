<?php

function getEnumValues($table, $column) {
    $type = \DB::select(\DB::raw("SHOW COLUMNS FROM $table WHERE Field = '{$column}'"))[0]->Type ;
    preg_match('/^enum\((.*)\)$/', $type, $matches);
    $enum = array();
    foreach( explode(',', $matches[1]) as $value )
    {
    $v = trim( $value, "'" );
    $enum = \Arr::add($enum, $v, $v);
    }
    return $enum;
}

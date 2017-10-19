<?php

function link_to_route_html($name, $html, $parameters = [], $attributes = [])
{
    $url = route($name, $parameters);

    return '<a href="'.$url.'"'.app('html')->attributes($attributes).'>'.$html.'</a>';
}

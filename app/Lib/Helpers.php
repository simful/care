<?php

function m($input)
{
    return 'Rp '.number_format($input, 2, '.', ',');
}

function mp($input)
{
    return 'Rp <span class="pull-right">'.number_format($input, 2, '.', ',').'</span>';
}

function d($input)
{
    if (!($input instanceof Carbon\Carbon)) {
        $input = new Carbon\Carbon($input);
    }

    return $input->toFormattedDateString();
}

function age($input)
{
    if (!($input instanceof Carbon\Carbon)) {
        $input = new Carbon\Carbon($input);
    }

    return $input->diff(date_create('today'))->y;
}

function redirectOrJson($destinationUrl, $data)
{
    if (Request::ajax()) {
        return $data;
    } else {
        return redirect($destinationUrl);
    }
}

function viewOrJson($viewName, $data)
{
    if (Request::ajax()) {
        return $data;
    } else {
        return view($viewName, $data);
    }
}

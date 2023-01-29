<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7;


$img = "/images/";


if (!function_exists('get_session')) {
    function get_session($key='')
    {
        return session("jo_user.$key");
    }
}

if (!function_exists('pre')) {
    function pre($ref = '', $exit = 0)
    {
        echo "<pre>";
        print_r($ref);
        echo "</pre>";
        if ($exit) {
            exit();
        }
    }
}

if (!function_exists('seg')) {
    function seg($ref = 0)
    {
        $output = '';
        $segments = request()->segments();
        if (isset($segments[$ref])) {
            $output = $segments[$ref];
        }
        return $output;
    }
}

if (!function_exists('get_title_input')) {
    function get_title_input($val = '')
    {
        echo
        '<div class="fv-row mb-10">
            <label class="required form-label">Title</label>
            <input id="title" name="title" type="text" class="form-control" placeholder="Title" value="' . $val . '" />
        </div>';
    }
}

if (!function_exists('get_sort_by')) {
    function get_sort_by($val = '')
    {
        echo
        '<div class="fv-row mb-10">
            <label class="required form-label">Sort by</label>
            <input id="sort_by" name="sort_by" type="number" min="0" class="form-control" placeholder="Sort By" value="' . $val . '" />
        </div>';
    }
}

if (!function_exists('get_active_combo')) {
    function get_active_combo($ref = 'is_active', $selected = '')
    {

        $select_yes = '';
        $select_no = '';
        if ($selected) {
            $select_yes = 'selected="selected"';
        } else {
            $select_no = 'selected="selected"';
        }
        echo
        '<div class="fv-row mb-10">
                <label class="required form-label">Active</label>
                <select id="' . $ref . '" name="' . $ref . '" class="form-select" data-control="select2" data-hide-search="true" data-placeholder="Select an option">
                    <option value="1" ' . $select_yes . '>Yes</option>
                    <option value="0" ' . $select_no . '>No</option>
                </select>
            </div>';
    }
}

if (!function_exists('get_submit_btn')) {
    function get_submit_btn($title = 'Submit')
    {
        echo
        '<div class="card-footer text-end">
            <button type="submit" id="form_submit_btn" class="btn btn-primary">
                <span class="indicator-label">' . $title . '</span>
                <span class="indicator-progress">Please wait...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                </span>
            </button>
        </div>';
    }
}

if (!function_exists('get_amenity_input_types')) {
    function get_amenity_input_types($selected = '')
    {
        $types = ['number' => 'numeric', 'Boolean' => 'Boolean', 'text' => 'Text', 'drop_down' => 'Dropdown', 'text' => 'Alpha'];
        $html =  '<div class="fv-row mb-10">
                    <label class="required form-label">Input Type</label>
                    <select id="input_type" name="input_type" class="form-select" data-control="select2" data-hide-search="true" data-placeholder="Select an option">
                        <option value="">--select--</option>';
        foreach ($types as $type => $val) {
            $select = '';
            if ($selected == $type) {
                $select = 'selected';
            }
            $html .= '<option ' . $select . ' value="' . $type . '">' . $val . '</option>';
        }
        $html .=  ' </select>
                </div>';
        echo $html;
    }
}

if (!function_exists('has_permission'))
{
    function has_permission($privilege = '0', $action='')
    {
        return true;
    }
}

if (!function_exists('can_access'))
{
    function can_access($id = '0', $action='')
    {
       return true;
    }
}

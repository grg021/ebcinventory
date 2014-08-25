<?php

function errors_for($attribute, $errors)
{
	return $errors->first($attribute, '<span class="error">:message</span>');
}

function errors_check($attribute, $errors)
{
	return ($errors->first($attribute)) ? 'has-error':'';
}

function link_to_profile($text = 'Profile')
{
	return link_to_route('profile', $text, Auth::user()->username);
}

function getAge($date) {
	$from = new DateTime($date);
	$to   = new DateTime('today');
	return $from->diff($to)->y;
}

function echoActiveClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");
    if ($current_file_name == $requestUri)
        echo 'active';
}
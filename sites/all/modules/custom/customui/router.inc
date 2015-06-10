<?php

function router()
{
    $path = request_path();
    switch ($path) {
        case 'welcome':
            $page = array(
                '#markup' => theme('welcome', array()),
            );
            break;
        case '':
            $page = array(
                '#markup' => theme('welcome', array()),
            );
            break;
        case 'about-us':
            $page = array(
                '#markup' => theme('about-us', array()),
            );
            break;
        case 'contact-us':
            $page = array(
                '#markup' => theme('contact-us', array()),
            );
            break;
        case 'services':
            $page = array(
                '#markup' => theme('services', array()),
            );
            break;
        case 'services-item':
            $page = array(
                '#markup' => theme('services-item', array()),
            );
            break;
        default:
            $page = array(
                '#markup' => "<div>Hello, world</div>",
            );
            break;
    }

    return $page;
}

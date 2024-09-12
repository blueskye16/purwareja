<?php

// if (!function_exists('are_routes_active')) {
//     function are_routes_active(array $routes)
//     {
//         foreach ($routes as $route) {
//             if (request()->is($route)) {
//                 return true;
//             }
//         }
//         return false;
//     }
// }

function anyRouteIsActive(array $routes)
{
    return request()->is($routes);
}

function getButtonClasses(array $routes)
{
    return anyRouteIsActive($routes) ? 'text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent' : 'text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent';
}

// advice from blackbox
// function are_routes_active(array $routes)
// {
//     return request()->is($routes);
// }

<?php

return [
    /*
     * Your Cloudflare Email, used to login
     */
    'email' => env('CLOUDFLARE_EMAIL'),

    /*
     * Your Cloudflare API Key
     */
    'key' => env('CLOUDFLARE_API_KEY'),

    /*
     * The Zone you would like to modify
     */
    'zone' => env('CLOUDFLARE_ZONE_ID'),
];

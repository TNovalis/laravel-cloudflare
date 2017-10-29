# Laravel Cloudflare
The Cloudflare API right from Laravel.

*Note: This will work for anything Laravel 5 and up but I made it for Laravel 5.5 so I won't add the service provider and facade instructions here.*

#### You need three things to use this:
1. Your Cloudflare email, simple, the one you use to log in with.
2. Your Cloudflare API Key, found in your account settings.
3. The Zone ID for the domain you want to edit, this is on the main page for the domain.

##### What do I do with these?
Put them in you `.env` as the following, obviously and respectively.
1. `CLOUDFLARE_EMAIL`
2. `CLOUDFLARE_API_KEY`
3. `CLOUDFLARE_ZONE_ID`

#### What can you use this for?
Anything you feel you need to edit domains for. Personally I made it for a mutli-tenant app to automatically add a subdomain.

#### How do I use it?
First do `composer require tnovalis/laravel-cloudflare`

If you're in Laravel 5.5 you're done. If you aren't, figure it out.

##### No I mean like... in the code.

There is a `Cloudflare` facade that you can call. For the methods and arguments see `src/Cloudflare.php`

#### Can I help add things or clean this code?
Sure. Also if you want to contribute to the Wiki, go ahead.

<?php

// php7.4
$country =  null;

if ($session !== null) {
    $user = $session->user;

    if ($user !== null) {
        $address = $user->getAddress();

        if ($address !== null) {
            $country = $address->country;
        }
    }
}
// php8.0
$country = $session?->user?->getAddress()?->country;

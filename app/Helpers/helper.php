<?php


if (! function_exists('languages')) {

    function languages($code){
        $languages = [ 'bn' => 'Bengali', 'fr' => 'French','hi' => 'Hindi', 'en' => 'English', 'es' => 'Spain'];

        if ($code != null) {
            return $languages[$code] ?? null;
        }

        return $languages;

    }
}
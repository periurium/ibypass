<?php

use Proxy\Event\ProxyEvent;
use Proxy\Plugin\AbstractPlugin;

class SiteFixPlugin extends AbstractPlugin
{
    // Force old layout on sites
    public function onBeforeRequest(ProxyEvent $event)
    {
        $event['request']->headers->set('Cookie', 'PREF=f6=8');
        $event['request']->headers->set('User-Agent', 'Opera/7.50 (Windows XP; U)');
    }

    public function onCompleted(ProxyEvent $event)
    {
        // fired after the full response=headers+body has been read - will only be called on "non-streaming" responses

        $request = $event['request'];
        $response = $event['response'];

        $url = $request->getUri();

        // Check if fix exists for site 
        if(strpos($url, 'youtube.com/watch') !== false) {
            // Add jQuery and Our own fixes
            echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
            echo '<script src="assets/js/fix/youtube.js"></script>';
            
            // Add Youtube Libraries
            echo '<script src="https://www.youtube.com/yts/jsbin/web-animations-next-lite.min-vflluX5aW/web-animations-next-lite.min.js"></script>';
            echo '<script src="https://www.youtube.com/yts/jsbin/desktop_polymer_v2-vfldWNKnS/desktop_polymer_v2.js"></script>';

        }
    }
}
<?php
require_once __DIR__ . '/security.php';
// Central place for server-side API keys.
// IMPORTANT: Do not expose this file publicly in production.

return [
    // Airforce (images only)
    'airforce_image_pool' => [
        'sk-air-7Sbaj49Kp16gvjTsMOkNyzfVMupit7MZ7mlBFAyrH2Sk4aWzFthXpOE8A0cxcjeJ',
        'sk-air-9pucggG3lhoyKcyVZW18XFznvIBS1X3qbnnjAP5jWgvkQCxm2MtHTO1LeVYvor7M',
        'sk-air-QaDBGtY8Lb3bMta4bGMRadNr1Bc7KufxWZWg5BjH6sUH6lV8uVjmvrGwM6aP3UML',
    ],
    'airforce_chat_pro_pool' => [
        'sk-air-dDjwzbONkpf6m59GlP8lS1eds4JZPee2weEIKPalkBWufd9AOs6soymMQWMALUFS',
        'sk-air-H45azThbDc3NxtJNMUd3eHrlTDs7PhoXpl24YAiNr1fjcEseV0QLDlN70Zer3ROX',
    ],

    // Pollinations (images) - server-side to avoid exposing key in URL
    'pollinations_image_pool' => [
        'sk_0Yq5evYnGAb7mXZdBGyuveUVr3rgOowK',
        'sk_zWiCJBWRGbLyVZ92cvsjX931Xb26Puw7',
    ],

    // Kie.ai — Telegram bot ONLY (website image gen uses Pollinations, not Kie).
    'kie_image_pool' => [
        'd0bd0909f1362d2f6a2a300379bacd8b',
    ],

    // Pixazo (website image models + public API page endpoint)
    'pixazo_key_pool' => [
        '14345e887b8445819ceb2fb9616e787d',
        'e379fc950c514584a09382543e75bbb7',
    ],
    'pixazo_site_key' => '14345e887b8445819ceb2fb9616e787d',
    'pixazo_api_key'  => '51960a34ef5946ccb5352f91fc8fda57',

];

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Elasticsearch\ClientBuilder;

class Twitter extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('twitterfetcher'));
    }

    public function index()
    {
        $client = ClientBuilder::create()->build();

        $params = [
            'index' => 'my_index',
            'type' => 'my_type',
            'id' => 'my_id',
            'body' => [
                'mappings' => [
                    'statuses' => [
                        'properties'=> [
                            'coordinates'=> ['type' => 'text'],
                            'favorited'=> ['type' => 'boolean'],
                            'truncated'=> ['type' =>'boolean'],
                            'created_at'=> ['type' => 'date'],
                            'id_str'=> ['type' => 'text'],
                            'entities'=> [
                                'urls'=> array(),
                                'hashtags'=> array(
                                    'text'=> ['type' => 'text'],
                                    'indices'=> array()
                                ),
                                'user_mentions'=> array()
                            ],
                            'in_reply_to_user_id_str'=> ['type' => 'text'],
                            'contributors'=> ['type' => 'text'],
                            'text'=> ['type' => 'text'],
                            'metadata'=> [
                                'iso_language_code'=> ['type' => 'text'],
                                'result_type'=> ['type' => 'text']
                            ],
                            'retweet_count'=> ['type' => 'integer'],
                            'in_reply_to_status_id_str'=> ['type' => 'text'],
                            'id'=> ['type' => 'text'],
                            'geo'=> ['type' => 'text'],
                            'retweeted'=> ['type' => 'boolean'],
                            'in_reply_to_user_id'=> ['type' => 'text'],
                            'place'=> ['type' => 'text'],
                            'user'=> [
                                'profile_sidebar_fill_color'=> ['type' => 'text'],
                                'profile_sidebar_border_color'=> ['type' => 'text'],
                                "profile_background_tile"=> ['type' => 'boolean'],
                                "name"=> ['type' => 'text'],
                                "profile_image_url"=> ['type' => 'text'],
                                "created_at"=> ['type' => 'date'],
                                "location"=> ['type' => 'text'],
                                "follow_request_sent"=> ['type' => 'text'],
                                "profile_link_color"=> ['type' => 'text'],
                                "is_translator"=> ['type' => 'boolean'],
                                "id_str"=> ['type' => 'text'],
                                "entities"=> [
                                  "url"=> [
                                    "urls"=> array(
                                        "expanded_url"=> ['type' => 'text'],
                                        "url"=> ['type' => 'text'],
                                        "indices"=> array()
                                    )
                                  ],
                                  "description"=> [
                                    "urls"=> array()
                                  ]
                                ],
                                "default_profile"=> ['type' => 'boolean'],
                                "contributors_enabled"=> ['type' => 'boolean'],
                                "favourites_count"=> ['type' => 'integer'],
                                "url"=> ['type' => 'text'],
                                "profile_image_url_https"=> ['type' => 'text'],
                                "utc_offset"=> ['type' => 'integer'],
                                "id"=> ['type' => 'text'],
                                "profile_use_background_image"=> ['type' => 'boolean'],
                                "listed_count"=> ['type' => 'integer'],
                                "profile_text_color"=> ['type' => 'text'],
                                "lang"=> ['type' => 'text'],
                                "followers_count"=> ['type' => 'integer'],
                                "protected"=> ['type' => 'boolean'],
                                "notifications"=> ['type' => 'text'],
                                "profile_background_image_url_https"=> ['type' => 'text'],
                                "profile_background_color"=> ['type' => 'text'],
                                "verified"=> ['type' => 'boolean'],  
                                "geo_enabled"=> ['type' => 'boolean'],
                                "time_zone"=> ['type' => 'text'],
                                "description"=> ['type' => 'text'],
                                "default_profile_image"=> ['type' => 'boolean'],
                                "profile_background_image_url"=> ['type' => 'text'],
                                "statuses_count"=> ['type' => 'integer'],
                                "friends_count"=> ['type' => 'integer'],
                                "following"=> ['type' => 'text'],
                                "show_all_inline_media"=> ['type' => 'boolean'],
                                "screen_name"=> ['type' => 'text']
                            ],
                            "in_reply_to_screen_name"=> ['type' => 'text'],
                            "source"=> ['type' => 'text'],
                            "in_reply_to_status_id"=> ['type' => 'text']
                        ]
                    ]
                ]
            ]
        ];

        $response = $client->indicies()->create($params);

        // $tweets = $this->twitterfetcher->getTweets(array(
        //     'consumerKey'       => 'q0S84thQXmqAkAkYlgiRxfsCZ',
        //     'consumerSecret'    => 'tYNuoqDqu2ksGCbp9dVjqJou9D7KlFPNrKL6sV6JmJROfzAoY7',
        //     'accessToken'       => '822369967039344641-xA71khmP3LhZOVOKwH1mFdfzBAttDrC',
        //     'accessTokenSecret' => 'kcqAaxhdJitQajyIaG4g4DuQ6MDCSpva6f3IGbN3h7FIM',
        //     'usecache'          => true,
        //     'count'             => 0,
        //     'numdays'           => 100
        // ));
        // //echo '<pre>' . var_export($tweets, true) . '</pre>';
        // echo '<pre>' . json_encode($tweets, JSON_PRETTY_PRINT) . '</pre>';
    }
}
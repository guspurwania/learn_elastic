<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Elasticsearch\ClientBuilder;

class Elastic extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $client = ClientBuilder::create()->build();

        $params = [
            'index' => 'my_index',
            'body' => [
                'mappings' => [
                    'my_type' => [
                        'properties' => [
                            'created_at' => [
                                'type'=> 'date',
                                'format'=> 'E MMM dd HH:mm:ss Z yyyy'
                            ]
                        ]
                    ]
                ]
            ]
        ];

        $response = $client->indices()->create($params);
    }
}
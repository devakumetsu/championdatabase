<?php

class TestCase extends PHPUnit_Framework_TestCase {

    protected $client;

    public function __construct(){
        parent::__construct();
        $this->client = new GuzzleHttp\Client();
    }

    protected function setUp(){
        parent::setUp();
    }

    protected function tearDown(){
        parent::tearDown();
        $this->cleanDataBase();
    }

    protected function cleanDataBase(){
        Request::truncate();
    }

    /**
     * @return string
     */
    protected function getSourceFile(){
        $fullPath = ROOT_PATH . '/app/public/source.txt';
        file_put_contents($fullPath, 'Some test content just to see if it uploads.');
        return $fullPath;
    }

}
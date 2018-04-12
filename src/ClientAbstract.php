<?php


namespace carono\megaindex;


abstract class ClientAbstract extends \carono\rest\Client
{
    public $url = 'http://api.megaindex.ru';
    public $method = 'GET';
    public $output_type = self::TYPE_JSON;
    public $useAuth = false;

    public function beforePrepareData(array $data)
    {
        $data['user'] = $this->login;
        $data['password'] = $this->password;
        return parent::beforePrepareData($data);
    }

    public function scan_yandex_suggest($request)
    {
        return $this->getContent('scan_yandex_suggest', ['request' => $request]);
    }
}
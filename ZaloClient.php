<?php 

use Zalo\Zalo;
use Zalo\ZaloEndpoint;

class ZaloClient {
    protected $zaloConfig;
    protected $zalo;

    public function __construct(ZaloConfig $zaloConfig) {
        $this->zaloConfig = $zaloConfig;
        $this->zalo = new Zalo($this->zaloConfig->getConfig());
    }

    protected function getFollowerIDs() {
        $data = [
            'offset' => 0,
            'count' => 50
        ];

        $params = ['data' => $data];

        return $followerIds = $this->zalo->get('/getfollowers', $params)->getDecodedBody()['data']['followers'];
    }

    public function sendMessageToAll($message) {
        $followerIds = $this->getFollowerIDs();


        foreach ($followerIds as $follower) {
            $data = [
                'uid' => $follower['uid'],
                'message' => $message
            ];

            $params = ['data' => $data];
            
            $response = $this->zalo->post(ZaloEndpoint::API_OA_SEND_TEXT_MSG, $params);

            $result = $response->getDecodedBody();
        }
        
    }
}
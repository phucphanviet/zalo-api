<?php

/**
 * Class ZaloConfig
 * Clone ZaloConfig
 * Author: Phuc Le Dien
 */
class ZaloConfig {

    
    protected $zaloAppId;
    protected $zaloAppSecretKey;
    protected $zaloOaID;
    protected $zaloOaSecretKey;

    public function __construct($zaloAppId="", $zaloAppSecretKey="", $zaloOaID="", $zaloOaSecretKey="")
    {
        $this->zaloAppId = $zaloAppId;
        $this->zaloAppSecretKey = $zaloAppSecretKey;
        $this->zaloOaID = $zaloOaID;
        $this->zaloOaSecretKey = $zaloOaSecretKey;
    }

    /**
     * Get zalo sdk config
     * @return []
     */
    public function getConfig() {
        return [
            'app_id' => $this->zaloAppId,
            'app_secret' => $this->zaloAppSecretKey,
            'oa_id' => $this->zaloOaID,
            'oa_secret' => $this->zaloOaSecretKey
        ];
    }

}

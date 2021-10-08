<?php

namespace NitroPack;

class HttpClientProxy {
    private $scheme;
    private $host;
    private $addr;
    private $port;

    public function __construct($url) {
        $url = new Url($url);
        $this->scheme = strtolower($url->getScheme());
        $this->host = $url->getHost();
        $this->addr = gethostbyname($this->host);
        $this->port = $url->getPort();

        if (!$this->port) {
            $this->port = $this->scheme == 'https' ? 443 : 80;
        }
    }

    public function getScheme() {
        return $this->scheme;
    }

    public function getHost() {
        return $this->host;
    }

    public function getAddr() {
        return $this->addr;
    }

    public function getPort() {
        return $this->port;
    }
}

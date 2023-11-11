<?php

namespace RaihanNih\QrCode\Factory;

class QRCodeFactory
{

    public function __construct(protected string $url, protected string $name)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getURL(): string
    {
        return $this->url;
    }

    public function render(): void
    {
        echo "<img src='https://api.qrserver.com/v1/create-qr-code/?data=" . $this->url . "&amp;size=150x150' alt='" . $this->name . "' title='" . $this->name . "' />";
    }
}

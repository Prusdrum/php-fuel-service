<?php 
 namespace Fuel\Service\FuelStation;

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client as HttpClient;

class FuelStationClientTest extends TestCase {
    public function test() {
        $fakeResp = [
            'test' => 'bar'
        ];

        $httpStub = $this->createMock(HttpClient::class);
        $httpStub->method('request')->willReturn(
            $this->getMockForAbstractClass(\GuzzleHttp\Promise\PromiseInterface::class)
                ->method('getBody')
                ->willReturn($fakeResp)
        );

        $client = new FuelStationClient($httpStub);
        $resp = $client->fetchStation(1);
        $this->assertSame($resp, $fakeResp);
    }
}
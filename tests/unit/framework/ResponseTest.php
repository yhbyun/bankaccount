<?php
/**
 * @small
 */
class ResponseTest extends PHPUnit\Framework\TestCase
{
    /**
     * @covers Response::getHeaders
     */
    public function testNoHeadersAreInitiallySet()
    {
        $response = new Response;
        $this->assertEmpty($response->getHeaders());

        return $response;
    }

    /**
     * @covers  Response::addHeader
     * @depends testNoHeadersAreInitiallySet
     */
    public function testAddingHeadersWorks(Response $response)
    {
        $response->addHeader('HTTP/1.0 404 Not Found');

        $this->assertContains(
          'HTTP/1.0 404 Not Found',
            $response->getHeaders()
        );
    }
}

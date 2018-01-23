<?php
/**
 * @medium
 */
class ViewTest extends PHPUnit\Framework\TestCase
{
    protected $request;
    protected $response;
    protected $view;

    /**
     * @covers View::__construct
     */
    protected function setUp()
    {
        $this->request = new Request;
        $this->response = new Response;
        $this->view = $this->getMockBuilder('View')
                               ->setConstructorArgs(
                                   [$this->request, $this->response]
                                 )
                               ->getMockForAbstractClass();
    }

    public function testViewObjectCanBeConstructed()
    {
        $this->assertAttributeSame($this->request, 'request', $this->view);
        $this->assertAttributeSame($this->response, 'response', $this->view);
    }
}

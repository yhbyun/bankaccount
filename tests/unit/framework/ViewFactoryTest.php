<?php
/**
 * @small
 */
class ViewFactoryTest extends PHPUnit\Framework\TestCase
{
    /**
     * @covers ViewFactory::getView
     */
    public function testDefaultMapperCanBeConstructed()
    {
        $viewFactory = new ViewFactory;

        $this->assertInstanceOf(
          'StdClass',
          $viewFactory->getView('StdClass', new Request, new Response)
        );
    }
}

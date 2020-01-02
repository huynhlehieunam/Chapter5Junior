<?php
namespace Magenest\Rules\Test\Unit\Repository;

use Magenest\Rules\Model\Cache\Rule;
use Magenest\Rules\Model\RuleRepository;
use Magento\Framework\Serialize\Serializer\Serialize;
use PHPUnit\Framework\TestCase;

class RepositoryTest extends TestCase{

    /**
     * @var RuleRepository
     */
    private $sampleClass;
    /**
     * @var \Magento\Framework\TestFramework\Unit\Helper\ObjectManager
     */
    private $objectManager;


    public function setUp(){
        $this->objectManager = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);
        $this->sampleClass = $this->objectManager->getObject(RuleRepository::class);
    }

    public function testLoad(){
        $this->assertInstanceOf(Rule::class,$this->sampleClass->load(1),'Return model');
    }
}
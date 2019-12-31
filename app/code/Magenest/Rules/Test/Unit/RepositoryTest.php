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


    public function setUp(){
        $objectManager = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);
        $this->sampleClass = $objectManager->getObject(RuleRepository::class);
        $this->ruleModel = $objectManager->getObject(\Magenest\Rules\Model\Rule::class);
    }

    public function testLoad(){
        $objectManager = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);

        /** @var \Magenest\Rules\Model\Rule $ruleModel */
        $ruleModel = $objectManager->getObject(\Magenest\Rules\Model\Rule::class);
        $ruleModel->setData(['title'=>'Above 18','status'=>'pending','rule_type'=>1,'condition_serialized'=>\serialize('heelio')]);
        $ruleModel->save();

        $this->assertEquals();


    }
}
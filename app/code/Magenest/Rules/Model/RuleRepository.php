<?php


namespace Magenest\Rules\Model;


use Magento\Framework\Serialize\Serializer\Serialize;

class RuleRepository implements RepositoryRuleInterface
{
    const   CACHE_ID = 'rule';
    const   CACHE_TYPE = 'RULE';
    const   CACHE_LIFETIME = 84000;

    /*
     * @var Cache\Rule
     */
    private $_ruleCache;
    /**
     * @var Serialize
     */
    private $_serializer;
    /**
     * @var array
     */
    private $instances;
    /**
     * @var Rule
     */
    private $_ruleModel;

    public function __construct(\Magenest\Rules\Model\Cache\Rule $ruleCache, Rule $rule, Serialize $serialize)
    {
        $this->_ruleModel = $rule;
        $this->_ruleCache = $ruleCache;
        $this->_serializer = $serialize;
        $this->instances = [];
    }

    public function load($id)
    {
        /** @var Rule $ruleModel */
        $ruleModel = $this->_ruleModel;

        if ($data = $this->_ruleCache->load($id)) {
            return $this->_serializer->unserialize($data);
        } else {
            return $ruleModel->load($id);
        }
    }

    public function save(Rule $rule)
    {
        /** @var Rule $ruleModel */
        try {
            $rule->save();
        } catch (\Exception $e) {
            throwException($e);
            return;
        };

        $this->_ruleCache->save(
            $this->prepareData($rule),
            $rule->getId(),
            self::CACHE_TYPE,
            self::CACHE_LIFETIME
        );
    }

    public function delete(Rule $rule)
    {
        $id = $rule->getId();

        try {
            $rule->delete();
        } catch (\Exception $e) {
            throwException($e);
        }

        $this->_ruleCache->remove($id);
    }

    private function prepareData(Rule $rule)
    {
        return $this->_serializer->serialize($rule);
    }
}
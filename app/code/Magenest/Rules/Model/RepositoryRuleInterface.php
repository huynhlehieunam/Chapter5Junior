<?php

namespace Magenest\Rules\Model;

interface RepositoryRuleInterface{
    public function load($id);
    public function save(Rule $rule);
    public function delete(Rule $rule);
}
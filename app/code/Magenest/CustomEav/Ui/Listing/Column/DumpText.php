<?php

namespace Magenest\CustomEav\Ui\Listing\Column;

use Magento\Backend\Model\Auth\Session;
use Magento\Catalog\Model\ProductRepository;
use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Ui\Component\Listing\Columns\Column;

class DumpText extends Column{
    /**
     * @var Session
     */
    private $authSession;
    /**
     * @var ProductRepository
     */
    private $productRepository;

    public function __construct(
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        Session $authSession,
        ProductRepository $productRepository,
        array $components = [],
        array $data = [])
    {
        parent::__construct($context, $uiComponentFactory, $components, $data);
        $this->authSession = $authSession;
        $this->productRepository = $productRepository;

    }
    public function prepare()
    {
        parent::prepare(); // TODO: Change the autogenerated stub
        $username = $this->authSession->getData('user')->getUserName();
        if ($username[0]>='A'&&$username[0]<='M'){
            $this->_data['config']['componentDisabled'] = false;
        }
    }
<<<<<<< HEAD
    public function prepareDataSource(array $dataSource)
    {
       foreach ($dataSource['data']['items'] as $id=>&$item){
           $dumpText = $this->productRepository
               ->getById($item['entity_id'])
               ->getCustomAttribute('dump_text')
                ->getValue();
           $item['dump_text'] = $dumpText;
       };
       return $dataSource;
    }
=======
>>>>>>> 4c9accb6f28172d6c3cbd6b5aae0db30f7b28f2c
}
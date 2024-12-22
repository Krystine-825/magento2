<?php

namespace YourVendor\News\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\ResultFactory;

class Index implements ActionInterface
{
    /**
     * @var ResultFactory
     */
    protected $resultFactory;

    /**
     * Constructor
     *
     * @param ResultFactory $resultFactory
     */
    public function __construct(
        ResultFactory $resultFactory
    ) {
        $this->resultFactory = $resultFactory;
    }

    /**
     * Execute action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        // Tạo một trang kết quả (Page Result)
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        // Đặt tiêu đề trang nếu cần
        $resultPage->getConfig()->getTitle()->set(__('Latest News'));

        return $resultPage;
    }
}

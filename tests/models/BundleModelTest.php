<?php namespace Redooor\Redminportal\Test;

use Redooor\Redminportal\App\Models\Bundle;

class BundleModelTest extends BaseModelTest
{
    /**
     * Contructor
     */
    public function __construct()
    {
        $model = new Bundle;
        $testcase = array(
            'name' => 'This is the title',
            'sku' => 'UNIQUESKU001',
            'short_description' => 'This is the body',
            'category_id' => 1,
            'active' => true
        );
        
        parent::__construct($model, $testcase);
    }
    
    /**
     * Destructor
     */
    public function __destruct()
    {
        parent::__destruct();
    }
}
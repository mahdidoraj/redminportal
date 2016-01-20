<?php namespace Redooor\Redminportal\Test;

use Auth;
use Redooor\Redminportal\App\Models\User;

class EmailApiTest extends RedminTestCase
{
    /**
     * Setup initial data for use in tests
     */
    public function setup()
    {
        parent::setup();
        
        $this->seed('RedminSeeder');
    }
    
    /**
     * Test (Pass): access /api/email
     */
    public function testIndexPass()
    {
        Auth::loginUsingId(1); // Fake admin authentication
        
        $response = $this->call('GET', '/api/email');
        $this->assertResponseOk();
        
        $input = $response->getContent();
        
        $output = '[]';
        $this->assertTrue($input == $output);
    }
    
    /**
     * Test (Fail): access /api/email without authentication
     */
    public function testIndexFail()
    {
        $this->call('GET', '/api/email');
        $this->assertResponseStatus(302);
    }
    
    /**
     * Test (Pass): access /api/email/all
     */
    public function testGetNamePass()
    {
        Auth::loginUsingId(1); // Fake admin authentication
        
        $response = $this->call('GET', '/api/email/all');
        $this->assertResponseOk();
        
        $input = $response->getContent();
        
        $output = '["admin@admin.com"]';
        $this->assertTrue($input == $output);
    }
    
    /**
     * Test (Fail): access /api/email/all without authentication
     */
    public function testGetNameFail()
    {
        $this->call('GET', '/api/email/all');
        $this->assertResponseStatus(302);
    }
}

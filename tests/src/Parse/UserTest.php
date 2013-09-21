<?php

namespace Parse;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2013-08-06 at 15:18:50.
 */
class UserTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var User
     */
    protected $object;
    protected $testUser;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new User;
        $this->testUser = array(
            'username' => 'test_user_' . rand(),
            'password' => 'testPass',
            'email' => 'testUser@example.com',
            'customField' => 'customValue'
        );
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers Parse\User::signup
     */
    public function testSignup() {
        $new_user = new \Parse\User;
        $new_user->username = $this->testUser['username'];
        $new_user->password = $this->testUser['password'];
        $objectId = $new_user->signup();
        
        $new_user->isActive = true;
        $new_user->update();
        
        $login = new \Parse\User;
        $login->username = $this->testUser['username'];
        $login->password = $this->testUser['password'];
        $login->login();
        
        $this->assertNotNull($objectId);
        $this->assertEquals($login->objectId, $objectId);
        
    }

    
    public function testHasRole() {
        $user = new \Parse\User;
        $user->where('username', 'dan_test');
        $user->get();
        
        $this->assertTrue($user->hasRole('admin'));
           
        /*$user = new \Parse\User;
        $user->where('username', 'dan_test2');
        $user->get();
        
        $this->assertFalse($user->hasRole('admin'));*/
    }
    /**
     * @covers Parse\User::login
     */
    public function testLogin() {
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Parse\User::socialLogin
     * @todo   Implement testSocialLogin().
     */
    public function testSocialLogin() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Parse\User::get
     * @todo   Implement testGet().
     */
    public function testGet() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Parse\User::update
     * @todo   Implement testUpdate().
     */
    public function testUpdate() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Parse\User::delete
     * @todo   Implement testDelete().
     */
    public function testDelete() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Parse\User::addAuthData
     * @todo   Implement testAddAuthData().
     */
    public function testAddAuthData() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Parse\User::linkAccounts
     * @todo   Implement testLinkAccounts().
     */
    public function testLinkAccounts() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Parse\User::unlinkAccount
     * @todo   Implement testUnlinkAccount().
     */
    public function testUnlinkAccount() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Parse\User::requestPasswordReset
     * @todo   Implement testRequestPasswordReset().
     */
    public function testRequestPasswordReset() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

}

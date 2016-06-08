<?php

namespace phpUnitTutorial\Test;

use phpUnitTutorial\User;

class UserTest extends \PHPUnit_Framework_TestCase {

    public function testSetPasswordReturnsTrueWhenPasswordSuccessfullySet() {
        
        $details = array();
        
        $user = new User($details);
        
        $password = '123';
        
        $result = $user->setPassword($password);
        
        $this->assertTrue($result);
    }

    public function testGetUserReturnsUserWithExpectedValues(){
        $details = array();

        $user = new User($details);

        $password = '123';

        $user->setPassword($password);

        $expectedPasswordResult = md5('123');

        $currentUser = $user->getUser();

        $this->assertEquals($expectedPasswordResult, $currentUser['password']);
    }

}

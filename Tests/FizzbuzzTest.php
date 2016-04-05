<?php

require_once dirname(__FILE__) . '/../Fizzbuzz.php';
 
class FizzbuzzTest extends PHPUnit_Framework_TestCase {
    
    private $fizzbuzz;

    function __construct() {
        $this->fizzbuzz = new Fizzbuzz();
    }

    function testResultShouldBeOne() 
    {

        $result = $this->fizzbuzz->execute(1);

        $this->assertEquals($result,'1');
    }

    function testResultShouldBeTwo() 
    {

        $result = $this->fizzbuzz->execute(2);

        $this->assertEquals($result,'2');
    }

    function testResultShouldBeFizz() 
    {

        $result = $this->fizzbuzz->execute(3);

        $this->assertEquals($result,'fizz');
    }

    function testResultShouldBeBuzz() 
    {        

        $result = $this->fizzbuzz->execute(5);

        $this->assertEquals($result,'buzz');
    }

    function testResultShouldBeFizzBuzz()
    {
        $result = $this->fizzbuzz->execute(15);

        $this->assertEquals($result,'fizzbuzz');
    }
   

    function testResultShouldBeNumberOneToFifteenWithFizzBuzz()
    {

        $result = $this->fizzbuzz->play();

        $this->assertEquals($result,'1 2 fizz 4 buzz fizz 7 8 fizz buzz 11 fizz 13 14 fizzbuzz');
    }
 
}
<?php
    use PHPUnit\Framework\TestCase;

    use Chameleon\Vector2;

    final class Vector2Test extends TestCase {

        private $vector;

        /**
         * @before
         */
        public function setUp() {
            $this -> vector = new Vector2(20, 10);
        }

        /**
         * @covers Vector2::__construct
         */
        public function test__construct() {
            $this -> assertObjectHasAttribute("x", $this -> vector);
            $this -> assertObjectHasAttribute("y", $this -> vector);
        }

        /**
         * @covers Vector2::__toString
         */
        public function test__toString() {
            $this -> assertEquals("(20, 10)", $this -> vector -> __toString());
        }

        /**
         * @covers Vector2::getX
         */
        public function testGetX() {
            $this -> assertEquals(20, $this -> vector -> getX());
        }

        /**
         * @covers Vector2::setX
         */
        public function testSetX() {
            $this -> vector -> setX(55);
            $this -> assertEquals(55, $this -> vector -> getX());
        }

        /**
         * @covers Vector2::getY
         */
        public function testGetY() {
            $this -> assertEquals(10, $this -> vector -> getY());
        }

        /**
         * @covers Vector2::setY
         */
        public function testSetY() {
            $this -> vector -> setY(35);
            $this -> assertEquals(35, $this -> vector -> getY());
        }
    }
?>
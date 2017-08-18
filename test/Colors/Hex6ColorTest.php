<?php
    use PHPUnit\Framework\TestCase;

    use Chameleon\Colors\Hex6Color;
    use Chameleon\Exceptions\ValueOutOfBoundsException;

    final class Hex6ColorTest extends TestCase {

        private $color;

        /**
         * @before
         */
        public function setUp() {
            $this -> color = new Hex6Color("#40BFFF");
        }

        /**
         * @covers Hex6Color::__construct
         */
        public function test__construct() {
            $this -> assertObjectHasAttribute("red", $this -> color);
            $this -> assertObjectHasAttribute("green", $this -> color);
            $this -> assertObjectHasAttribute("blue", $this -> color);
        }

        /**
         * @covers Hex6Color::__toString
         */
        public function test__toString() {
            $this -> assertEquals("#40BFFF", $this -> color -> __toString());
        }

        /**
         * @covers Hex6Color::getHex
         */
        public function testGetHex() {
            $this -> assertEquals("#40BFFF", $this -> color -> getHex());
        }

        /**
         * @covers Hex6Color::setHex
         */
        public function testSetHex() {
            $this -> color -> setHex("#AABBCC");
            $this -> assertEquals("#AABBCC", $this -> color -> getHex());
        }

        /**
         * @covers Hex6Color::getRed
         */
        public function testGetRed() {
            $this -> assertEquals(64, $this -> color -> getRed());
        }

        /**
         * @covers Hex6Color::getGreen
         */
        public function testGetGreen() {
            $this -> assertEquals(191, $this -> color -> getGreen());
        }

        /**
         * @covers Hex6Color::getBlue
         */
        public function testGetBlue() {
            $this -> assertEquals(255, $this -> color -> getBlue());
        }

        /**
         * @covers Hex6Color::setRed
         */
        public function testSetRed() {
            $this -> color -> setRed(0);
            $this -> assertEquals(0, $this -> color -> getRed());
        }

        /**
         * @covers Hex6Color::setRed
         */
        public function testSetRedTooHigh() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setRed(256);
        }

        /**
         * @covers Hex6Color::setRed
         */
        public function testSetRedTooLow() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setRed(-1);
        }

        /**
         * @covers Hex6Color::setGreen
         */
        public function testSetGreen() {
            $this -> color -> setGreen(0);
            $this -> assertEquals(0, $this -> color -> getGreen());
        }

        /**
         * @covers Hex6Color::setGreen
         */
        public function testSetGreenTooHigh() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setGreen(256);
        }

        /**
         * @covers Hex6Color::setGreen
         */
        public function testSetGreenTooLow() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setGreen(-1);
        }

        /**
         * @covers Hex6Color::setBlue
         */
        public function testSetBlue() {
            $this -> color -> setBlue(0);
            $this -> assertEquals(0, $this -> color -> getBlue());
        }

        /**
         * @covers Hex6Color::setBlue
         */
        public function testSetBlueTooHigh() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setBlue(256);
        }

        /**
         * @covers Hex6Color::setBlue
         */
        public function testSetBlueTooLow() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setBlue(-1);
        }
    }
?>
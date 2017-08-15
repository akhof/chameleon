<?php
    namespace Colors;

    require_once("Color.php");

    class HSVColor extends Color {
        private $hue;
        private $saturation;
        private $value;

        private $red;
        private $green;
        private $blue;

        public function __construct(int $hue, float $saturation, float $value) {
            $this -> hue = $hue;
            $this -> saturation = $saturation;
            $this -> value = $value;

            $this -> makeRGB();
        }

        public function __toString() : string {
            return "hsv(" . $this -> hue . ", " . $this -> saturation . ", " . $this -> value . ")";
        }

        public function getHue() : int {
            return $this -> hue;
        }

        public function setHue(int $hue) {
            $this -> hue = $hue;
        }

        public function getSaturation() : int {
            return $this -> saturation;
        }

        public function setSaturation(int $saturation) {
            $this -> saturation = $saturation;
        }

        public function getValue() : int {
            return $this -> value;
        }

        public function setValue(int $value) {
            $this -> value = $value;
        }

        private function setRGB($red, $green, $blue) {
            $this -> red = round($red * 255);
            $this -> green = round($green * 255);
            $this -> blue = round($blue * 255);
        }

        private function makeRGB() {
            $hi = floor($this -> hue / 60);
            $f = ($this -> hue / 60) - $hi;

            $p = $this -> value * (1 - $this -> saturation);
            $q = $this -> value * (1 - $this -> saturation * $f);
            $t = $this -> value * (1 - $this -> saturation * (1 - $f));

            switch ($hi) {
                case 0:
                case 6:
                    $this -> setRGB($this -> value, $t, $p);
                    break;
                case 1:
                    $this -> setRGB($q, $this -> value, $p);
                    break;
                case 2:
                    $this -> setRGB($p, $this -> value, $t);
                    break;
                case 3:
                    $this -> setRGB($p, $q, $this -> value);
                    break;
                case 4:
                    $this -> setRGB($t, $p, $this -> value);
                    break;
                case 5:
                    $this -> setRGB($this -> value, $p, $q);
                    break;
                
            }
        }

        public function getRed() : int {
            return $this -> red;
        }

        public function getGreen() : int {
            return $this -> green;
        }

        public function getBlue() : int {
            return $this -> blue;
        }
    }
?>
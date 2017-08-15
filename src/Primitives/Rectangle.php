<?php
    namespace Primitives;
    
    require_once(__DIR__ . "/Primitive.php");

    class Rectangle extends Primitive {
        private $width;
        private $height;

        public function __construct(\Vector2 $point, int $width, int $height) {
            $this -> point = $point;
            $this -> width = $width;
            $this -> height = $height;
        }

        public function draw($imageResource) {
            imagerectangle($imageResource, 
                $this -> point -> getX(),
                $this -> point -> getY() + $this -> height,
                $this -> point -> getX() + $this -> width,
                $this -> point -> getY(),
                imagecolorallocate($imageResource, 0, 0, 0)
            );
        }
    }
?>
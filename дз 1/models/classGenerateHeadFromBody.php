<?php 
    class classGenerateHeadFromBody {
        public static $h = 150;
        public static $w = 150;
        
        public static function changeImage($src, $newsrc, $type) {
            $newimg = imagecreatetruecolor(self::$h, self::$w);
            switch ($type) {
                case 'jpg':
                    $img = imagecreatefromjpeg($src);
                    imagecopyresampled($newimg, $img, 0, 0, 0, 0, self::$h, self::$w, imagesx($img), imagesy($img));
                    imagejpeg($newimg, $newsrc);
                    break;
                case 'png':
                    $img = imagecreatefrompng($src);
                    imagecopyresampled($newimg, $img, 0, 0, 0, 0, self::$h, self::$w, imagesx($img), imagesy($img));
                    imagepng($newimg, $newsrc);
                    break;
                case 'gif':
                    $img = imagecreatefromgif($src);
                    imagecopyresampled($newimg, $img, 0, 0, 0, 0, self::$h, self::$w, imagesx($img), imagesy($img));
                    imagegif($newimg, $newsrc);
                    break;
            }
        }
    }


?>
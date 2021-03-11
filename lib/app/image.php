<?php

namespace App;

class Image
{
    
    static public function create_img_or_svg_inline( $image, $color)
    {
        if( empty( $image))
        {
            return;
        }

        if( $image['mime_type'] !== 'image/svg+xml')
        {
            $img = self::create_image_tag( $image);
            return $img;
        }

        $svg = self::create_inline_svg( $image);

        if( empty( trim($color)))
        {
            return $svg;
        }

        $color = esc_attr( trim($color));
        $new_stroke = 'stroke="' . $color . '"';
        $new_fill = 'fill="' . $color . '"';
        $svg = preg_replace('/(stroke\s*=\s*"#[^"]*")/', $new_stroke, $svg);
        $svg = preg_replace('/(fill\s*=\s*"#[^"]*")/', $new_fill, $svg);

        return $svg;
    }


    static private function create_image_tag( $image)
    {
        $img_tpl = '<img src="{src}" alt="" loading="lazy">';
        $image_tag = str_replace( '{src}', esc_url( $image['url']), $img_tpl);

        return $image_tag;
    }


    static private function create_inline_svg( $image)
    {
        $filename = get_attached_file( $image['id']);

        $svg = file_get_contents ( $filename); 
        $svg = preg_replace('/<\?xml\s*version=".*"\s*encoding="UTF-8"\s*\?>\s*/', '', $svg);

        return $svg;
    }
}

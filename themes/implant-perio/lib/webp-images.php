<?php 

function convert_image_to_webp($image_path, $image_type) {
    if (!in_array($image_type, ['image/jpeg', 'image/png'])) {
        return false; // Only convert JPEG and PNG images
    }

    $webp_image_path = preg_replace('/\.(jpe?g|png)$/i', '.webp', $image_path);

    if (file_exists($webp_image_path)) {
        return $webp_image_path; // Return WebP path if it already exists
    }

    $image = null;
    switch ($image_type) {
        case 'image/jpeg':
            $image = imagecreatefromjpeg($image_path);
            break;
        case 'image/png':
            $image = imagecreatefrompng($image_path);
            break;
    }

    if ($image) {
        imagewebp($image, $webp_image_path);
        imagedestroy($image);
        return $webp_image_path;
    }

    return false;
}

function create_webp_version_on_upload($metadata) {
    $upload_dir = wp_upload_dir();
    $base_dir = $upload_dir['basedir'];

    foreach ($metadata['sizes'] as $size => $size_info) {
        $image_path = $base_dir . '/' . $size_info['file'];
        $image_type = mime_content_type($image_path);

        convert_image_to_webp($image_path, $image_type);
    }

    return $metadata;
}

add_filter('wp_generate_attachment_metadata', 'create_webp_version_on_upload');

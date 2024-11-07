<?php



/** Handle file upload */

function handleUpload($inputName, $model = null)
{
    try {
        if (request()->hasFile($inputName)) {
            if ($model && \File::exists(public_path($model->{$inputName}))) {
                File::delete(public_path($model->{$inputName}));
            }

            $file = request()->file($inputName);
            $fileName = rand() . $file->getClientOriginalName();
            $file->move(public_path('/uploads'), $fileName);

            $filePath = "/uploads/" . $fileName;

            return $filePath;
        }
    } catch (\Exception $e) {
        throw $e;
    }
}

if (!function_exists('uploadImage')) {
    function uploadImage($img, $name, $path)
    {
        $extension = $img->getClientOriginalExtension();
        $folderName = time() . '-' . Str::slug($name);

        if (in_array($extension, ['pdf', 'svg', 'webp', 'jiff'])) { // Process based on file extension
            $img->move(public_path($path), $folderName . '.' . $extension);

            $imgurl = $path . $folderName . '.' . $extension;
        } else {
            $img = ImageResize::make($img);

            $img->resize(640, 735, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            $img->encode('webp', 75)->save($path . $folderName . '.webp');

            $imgurl = $path . $folderName . '.webp';
        }
        return $imgurl;
    }
}

/** Delete file */

function deleteFileIfExist($filePath)
{
    try {
        if (\File::exists(public_path($filePath))) {
            \File::delete(public_path($filePath));
        }
    } catch (\Exception $e) {
        throw $e;
    }
}

if (!function_exists('deleteFile')) {
    function deleteFile($filePath)
    {
        if (file_exists($filePath)) {
            if (!empty($filePath)) {
                unlink($filePath);
            }
        }
    }
}

/** open folders  */

if (!function_exists('folderOpen')) {
    function folderOpen($folderPath, $permissions = 0777)
    {
        if (!file_exists($folderPath)) {
            mkdir($folderPath, $permissions, true);
        }
    }
}

/** get dynamic colors  */

function getColor($index)
{
    $colors = ['#558bff', '#fecc90', '#ff885e', '#282828', '#190844', '#9dd3ff'];

    return $colors[$index % count($colors)];
}

/** Set Sidebar Active  */

function setSidebarActive($route)
{
    if (is_array($route)) {
        foreach ($route as $r) {
            if (request()->routeIs($r)) {
                return 'active';
            }
        }
    }
}

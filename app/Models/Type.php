<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Type extends Model
{
    use HasFactory;

    public static function get_all($dir): array
    {
        $path = resource_path("/catalogs/{$dir}/");
        if (!is_dir($path)) {
            abort(404);
        }
        else {
            $files = File::files($path);
        }

        return array_map(function ($file) {
            return $file->getContents();
        }, $files);
    }

    public static function choose($slug)  // формату 'black/black_3'
    {
        $type_path = resource_path("/catalogs/{$slug}.html");
        if (! file_exists($type_path)) {
            abort(404);
        }
        else { /* Задіяно кешування */
            return cache()->remember("catalog.{$slug}", 10, fn() => file_get_contents($type_path));
        }
    }

    public static function translate($type): string
    {
        $type_names = [
            'black' => 'Чорні',
            'baby' => 'Дитячі',
            'elite' => 'Елітні'
        ];

        return $type_names[$type];
    }
}

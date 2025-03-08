<?php

namespace App\Models;

use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'description',
        'category',
        'mentor_name',
        'mentor_photo',
        'thumbnail',
        'class_information'
    ];

    public static function boot()
    {
        parent::boot();

        static::saving(function ($kelas) {
            // Upload mentor_photo ke Cloudinary jika ada
            if (request()->hasFile('mentor_photo')) {
                $uploadedFile = request()->file('mentor_photo');
                if ($uploadedFile->isValid()) {
                    $uploadResult = Cloudinary::upload($uploadedFile->getRealPath())->getSecurePath();
                    $kelas->mentor_photo = $uploadResult;
                }
            }

            // Upload thumbnail ke Cloudinary jika ada
            if (request()->hasFile('thumbnail')) {
                $uploadedFile = request()->file('thumbnail');
                if ($uploadedFile->isValid()) {
                    $uploadResult = Cloudinary::upload($uploadedFile->getRealPath())->getSecurePath();
                    $kelas->thumbnail = $uploadResult;
                }
            }
        });
    }
}

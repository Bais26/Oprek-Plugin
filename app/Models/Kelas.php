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
    ];

    public static function boot()
    {
        parent::boot();

        static::saving(function ($bootcamp) {
            if (request()->hasFile('mentor_photo')) {
                $uploadedFile = request()->file('mentor_photo');
                $uploadResult = Cloudinary  ::upload($uploadedFile->getRealPath())->getSecurePath();
                $bootcamp->mentor_photo = $uploadResult;
            }
        });
    }
}

<?php

namespace App\Jobs;

use Spatie\Image\Image;
use Spatie\Image\Enums\Unit;
use Spatie\Image\Enums\CropPosition;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

class ResizeImage implements ShouldQueue
{
    use Queueable;
    
    private $w, $h, $fileName, $path;
    
    public function __construct($filePath, $w, $h)
    {
        $this->path = dirname($filePath);
        $this->fileName = basename($filePath);
        $this->w = $w;
        $this->h = $h;
    }
    
    /**
    * Execute the job.
    */
    public function handle(): void
    {
        
        $srcPath = storage_path() . '/app/public/' . $this->path . '/' . $this->fileName;
        
        
        Image::load($srcPath)
        ->watermark(
            base_path('resources/img/watermark.png'),
            width: 70,
            height: 70,
            paddingX: 10,
            paddingY: 10,
            paddingUnit: Unit::Percent
            )
            ->save($srcPath); 
            
            chmod($srcPath, 0664);
        }
        
    }
<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
use Spatie\Image\Manipulations;
use Illuminate\Queue\SerializesModels;
use Spatie\Image\Image as SpatieImage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class Watermark implements ShouldQueue
{
    private $announcement_image_id;
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct($announcement_image_id)
    {
        $this->announcement_image_id = $announcement_image_id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $i = Image::find($this->announcement_image_id);
        if (!$i) {
            return;
        }
        $srcPath = storage_path('app/public/' . $i->path);
        $imageToWatermark = SpatieImage::load($srcPath);

        // Get image dimensions
        $imageWidth = $imageToWatermark->getWidth();
        $imageHeight = $imageToWatermark->getHeight();

        // Calculate the step size for diagonal positioning
        $stepSize = 50; // Change this value to adjust the spacing between watermarks
        $numStepsX = ceil($imageWidth / $stepSize);
        $numStepsY = ceil($imageHeight / $stepSize);

        // Apply watermark in diagonal positions
        for ($i = 0; $i < $numStepsX + $numStepsY; $i++) {
            $x = $i * $stepSize;
            $y = $i * $stepSize;
            if ($x < $imageWidth && $y < $imageHeight) {
                $imageToWatermark->watermark(base_path('resources/img/logo.presto.scontornato.2.png'))
                    ->watermarkPosition('top-left')
                    ->watermarkPadding($x, $y)
                    ->watermarkFit(Manipulations::FIT_STRETCH)
                    ->save($srcPath); // Save the modified image
            }
        }
    }
}
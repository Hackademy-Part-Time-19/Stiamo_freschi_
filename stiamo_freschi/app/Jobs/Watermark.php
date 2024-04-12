<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

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
        $image = Image::find($this->announcement_image_id);
        if (!$image) {
            return;
        }

        $srcPath = storage_path('app/public/' . $image->path);
        $imageToWatermark = imagecreatefromjpeg($srcPath);

        $watermarkPath = base_path('resources/img/logo.presto.scontornato.2.png');
        $watermark = imagecreatefrompng($watermarkPath);

        // Rotate the watermark image by 45 degrees
        $watermark = imagerotate($watermark, 45, 0);

        // Get image dimensions
        $imageWidth = imagesx($imageToWatermark);
        $imageHeight = imagesy($imageToWatermark);

        // Get watermark dimensions
        $watermarkWidth = imagesx($watermark);
        $watermarkHeight = imagesy($watermark);

        // Calculate the diagonal length of the image
        $diagonalLength = sqrt($imageWidth * $imageWidth + $imageHeight * $imageHeight);

        // Calculate the step size for positioning the watermark along the diagonal
        $stepSize = 200; // Change this value to adjust spacing between watermarks
        $numSteps = ceil($diagonalLength / $stepSize);

        // Apply watermark in diagonal positions
        for ($i = 0; $i < $numSteps; $i++) {
            // Calculate the position along the diagonal
            $position = $i * $stepSize;

            // Calculate the ratio of position to diagonal length
            $ratio = $position / $diagonalLength;

            // Calculate the x and y positions based on the ratio
            $x = $ratio * $imageWidth;
            $y = $ratio * $imageHeight;

            // Position the watermark
            $offsetX = $x - $watermarkWidth / 2;
            $offsetY = $y - $watermarkHeight / 2;

            // Merge the rotated watermark onto the image
            imagecopy($imageToWatermark, $watermark, $offsetX, $offsetY, 0, 0, $watermarkWidth, $watermarkHeight);
        }

        // Save the modified image
        imagejpeg($imageToWatermark, $srcPath);
    }
}
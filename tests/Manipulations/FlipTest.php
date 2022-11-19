<?php

namespace Spatie\Image\Test\Manipulations;

use Spatie\Image\Image;
use Spatie\Image\Manipulations;
use Spatie\Image\Test\TestCase;

it('can flip an image', function () {
    $targetFile = $this->tempDir->path('conversion.jpg');

    Image::load($this->getTestJpg())->flip(Manipulations::FLIP_HORIZONTALLY)->save($targetFile);

    $this->assertFileExists($targetFile);
});

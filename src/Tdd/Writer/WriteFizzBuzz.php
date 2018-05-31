<?php
/**
 * This software was built by:
 * Daniel Tomé Fernández <danieltomefer@gmail.com>
 * GitHub: danitome24
 */
declare(strict_types=1);

namespace Tdd\Writer;

class WriteFizzBuzz implements Writer
{

    public function write(): string
    {
        return 'FizzBuzz';
    }
}
<?php

namespace AppBundle\Service;

interface FileMoverI
{
    public function move($existingFilePath, $newFilePath);
}
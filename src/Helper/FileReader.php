<?php

final class FileReader
{
    public static function read(string $path): array
    {
        $lines = [];
        if ($file = fopen($path, 'rb')) {
            while (!feof($file)) {
                $lines[] = fgets($file);
            }

            fclose($file);
        }

        return $lines;
    }
}
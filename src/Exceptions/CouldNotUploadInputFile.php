<?php

namespace Telegram\Bot\Exceptions;

/**
 * Class CouldNotUploadInputFile.
 */
final class CouldNotUploadInputFile extends TelegramSDKException
{
    public static function fileDoesNotExistOrNotReadable($file): self
    {
        return new self("File: `{$file}` does not exist or is not readable!");
    }

    public static function filenameNotProvided($path): self
    {
        $file = is_string($path) ? $path : "the resource that you're trying to upload";

        return new self(
            "Filename not provided for {$file}. ".
            'Remote or Resource file uploads require a filename. Refer Docs for more information.'
        );
    }

    public static function couldNotOpenResource($path): self
    {
        return new self("Failed to create InputFile entity. Unable to open resource: {$path}.");
    }

    public static function inputFileParameterShouldBeInputFileEntity($property): self
    {
        return new self("A path to local file, a URL, or a file resource should be uploaded using `Telegram\Bot\FileUpload\InputFile::create(\$pathOrUrlOrResource, \$filename)` for `{$property}` property. Please view docs for example.");
    }

    public static function missingParam($inputFileField): self
    {
        return new self("Input field [{$inputFileField}] is missing in your params. Please make sure it exists and is an `Telegram\Bot\FileUpload\InputFile` entity.");
    }
}

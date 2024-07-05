<?php

namespace Agcodex\FilamentPdfViewer\Infolists\Components;

use Filament\Infolists\Components\ViewEntry;
use Illuminate\Support\Facades\Storage;

class PdfViewerEntry extends ViewEntry
{
    protected string $view = 'filament-pdf-viewer::filament.components.infolists.pdf-viewer-entry';

    protected string $minHeight = '50svh';

    protected string $fileUrl = '';

    public function minHeight(string $minHeight): self
    {
        $this->minHeight = $minHeight;

        return $this;
    }

    public function getMinHeight(): string
    {
        return $this->minHeight;
    }

    public function fileUrl(string $fileUrl): self
    {
        $this->fileUrl = $fileUrl;

        return $this;
    }

    public function getFileUrl(): string
    {
        return $this->fileUrl;
    }

    public function getRoute(string $file)
    {
        if (Storage::disk('public')->exists($file)) {
            return Storage::url($file);
        }
    }
}

<?php

namespace App\Filament\Pages;

use App\Filament\Clusters\Life;
use Filament\Pages\Page;

class Cigarettes extends Page
{
    protected static ?string $cluster = Life::class;

    protected static ?string $navigationGroup = 'SubNav Management';

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.cigarettes';
}

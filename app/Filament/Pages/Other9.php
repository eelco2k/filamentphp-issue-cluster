<?php

namespace App\Filament\Pages;

use App\Filament\Clusters\Life;
use App\Filament\Widgets\ExpenseChart;
use App\Filament\Widgets\IncomeChart;
use Filament\Pages\Page;

class Other9 extends Page
{
    protected static ?string $cluster = Life::class;

    protected static ?string $navigationGroup = 'SubNav Management 9';

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.cigarettes';

    protected function getHeaderWidgets(): array
    {
        return [
            IncomeChart::class,
            ExpenseChart::class,
            IncomeChart::class,
            ExpenseChart::class,
        ];
    }
}

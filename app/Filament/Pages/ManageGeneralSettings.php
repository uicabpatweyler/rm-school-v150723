<?php

namespace App\Filament\Pages;

use App\Settings\GeneralSettings;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Pages\SettingsPage;

class ManageGeneralSettings extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog';

    protected static string $settings = GeneralSettings::class;
    protected static ?string $navigationGroup = 'Settings';
    protected static ?string $navigationLabel = "General";
    protected static ?int $navigationSort = 1;

    protected function getFormSchema(): array
    {
        return [
            Section::make('')
                ->description('Application')
                ->schema([
                    TextInput::make('app_name')
                        ->label('Name')
                        ->required(),
                ]),
            Section::make('')
                ->description('Organization')
                ->schema([
                    TextInput::make('organization_name')
                        ->label('Name')
                        ->required(),
                    TextInput::make('organization_description')
                        ->label('Description')
                        ->required(),
                ]),
        ];
    }
}

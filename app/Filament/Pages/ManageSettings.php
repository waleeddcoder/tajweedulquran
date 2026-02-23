<?php

namespace App\Filament\Pages;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Pages\Page;
use App\Models\Setting;
use Filament\Notifications\Notification;
use Filament\Actions\Action;

class ManageSettings extends Page implements HasForms
{
    use InteractsWithForms;

    protected string $view = 'filament.pages.manage-settings';

    public static function getNavigationIcon(): ?string
    {
        return 'heroicon-o-cog-6-tooth';
    }

    public static function getNavigationLabel(): string
    {
        return 'Site Settings';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Settings';
    }

    public ?array $data = [];

    public function mount(): void
    {
        $settings = Setting::all()->pluck('value', 'key')->toArray();
        $this->form->fill($settings);
    }

    public function form(Schema $form): Schema
    {
        return $form
            ->schema([

                // ── Branding ──────────────────────────────────────────
                Section::make('Branding & Identity')
                    ->description('Logo and site name shown in the navbar and footer.')
                    ->icon('heroicon-o-paint-brush')
                    ->columns(2)
                    ->schema([
                        TextInput::make('site_name')
                            ->label('Site Name')
                            ->placeholder('Tajweed Ul Quran')
                            ->maxLength(100),
                        FileUpload::make('logo')
                            ->label('Site Logo')
                            ->image()
                            ->disk('public')
                            ->directory('settings')
                            ->imagePreviewHeight('80')
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/svg+xml', 'image/webp'])
                            ->maxSize(2048)
                            ->helperText('Recommended: square PNG or SVG, max 1 MB.'),
                    ]),

                // ── Hero Section ──────────────────────────────────────
                Section::make('Hero Section')
                    ->description('The main banner shown at the top of the home page.')
                    ->icon('heroicon-o-home')
                    ->schema([
                        TextInput::make('hero_heading')
                            ->label('Heading')
                            ->placeholder('Learn Quran with Tajweed Online in Pakistan')
                            ->maxLength(120)
                            ->columnSpanFull(),
                        Textarea::make('hero_subheading')
                            ->label('Sub-heading')
                            ->placeholder('Traditional Teaching, Modern Approach')
                            ->rows(2)
                            ->maxLength(200)
                            ->columnSpanFull(),
                        FileUpload::make('hero_image')
                            ->label('Hero Image')
                            ->image()
                            ->disk('public')
                            ->directory('settings')
                            ->imagePreviewHeight('150')
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->maxSize(3072)
                            ->helperText('Displayed as the circular hero photo on the home page.')
                            ->columnSpanFull(),
                    ]),

                // ── Contact & WhatsApp ────────────────────────────────
                Section::make('Contact & WhatsApp')
                    ->description('WhatsApp number and default message for CTAs.')
                    ->icon('heroicon-o-phone')
                    ->columns(2)
                    ->schema([
                        TextInput::make('whatsapp_number')
                            ->label('WhatsApp Number')
                            ->placeholder('923448559422')
                            ->helperText('Include country code, no + or spaces. e.g. 923001234567'),
                        TextInput::make('contact_email')
                            ->label('Contact Email')
                            ->email()
                            ->placeholder('info@tajweedulquran.net'),
                        Textarea::make('whatsapp_message')
                            ->label('Default WhatsApp Message')
                            ->rows(2)
                            ->maxLength(300)
                            ->columnSpanFull(),
                    ]),

                // ── Social Media ──────────────────────────────────────
                Section::make('Social Media Links')
                    ->description('Leave blank to hide the social icon in the footer.')
                    ->icon('heroicon-o-share')
                    ->columns(2)
                    ->schema([
                        TextInput::make('facebook_url')
                            ->label('Facebook URL')
                            ->url()
                            ->placeholder('https://facebook.com/yourpage'),
                        TextInput::make('instagram_url')
                            ->label('Instagram URL')
                            ->url()
                            ->placeholder('https://instagram.com/yourhandle'),
                        TextInput::make('youtube_url')
                            ->label('YouTube URL')
                            ->url()
                            ->placeholder('https://youtube.com/@yourchannel'),
                        TextInput::make('twitter_url')
                            ->label('X / Twitter URL')
                            ->url()
                            ->placeholder('https://twitter.com/yourhandle'),
                    ]),

                // ── SEO ───────────────────────────────────────────────
                Section::make('SEO Defaults')
                    ->description('Used as fallback meta tags across all pages.')
                    ->icon('heroicon-o-magnifying-glass')
                    ->schema([
                        TextInput::make('meta_title')
                            ->label('Default Meta Title')
                            ->maxLength(70)
                            ->placeholder('Tajweed Ul Quran | Learn Quran Online in Pakistan')
                            ->columnSpanFull(),
                        Textarea::make('meta_description')
                            ->label('Default Meta Description')
                            ->rows(2)
                            ->maxLength(160)
                            ->columnSpanFull(),
                    ]),

            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $data = $this->form->getState();

        foreach ($data as $key => $value) {
            if ($value === null) continue; // skip nulls — don't wipe existing values
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        // Clear the settings cache so changes reflect immediately
        cache()->forget('site_settings');

        Notification::make()
            ->title('Settings Saved Successfully')
            ->body('Your changes are now live on the website.')
            ->success()
            ->send();
    }

    protected function getHeaderActions(): array
    {
        return [
            Action::make('save')
                ->label('Save All Settings')
                ->icon('heroicon-o-check-circle')
                ->action('save'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Enum\Major;
use Filament\Forms;
use Filament\Tables;
use App\Enum\Faculty;
use App\Enum\BloodType;
use Filament\Forms\Form;
use App\Models\Volunteer;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\VolunteerResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\VolunteerResource\RelationManagers;

class VolunteerResource extends Resource
{
    protected static ?string $model = Volunteer::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
{
    return $form
        ->schema([
            Section::make('Main Content')
                ->schema([
                    FileUpload::make('image')
                        ->image()
                        ->directory('member/volunteers')
                        ->required(),

                    TextInput::make('name')
                        ->required()
                        ->maxLength(255),

                    TextInput::make('member_id')
                        ->required()
                        ->maxLength(255)
                        ->label('Member ID'),

                    Select::make('faculty')
                        ->options([
                            Faculty::TEKNIK->value => Faculty::TEKNIK->value,
                            Faculty::EKONOMI_DAN_BISNIS->value => Faculty::EKONOMI_DAN_BISNIS->value,
                            Faculty::PERTANIAN->value => Faculty::PERTANIAN->value,
                            Faculty::FISIP->value => Faculty::FISIP->value,
                            Faculty::HUKUM->value => Faculty::HUKUM->value,
                            Faculty::KEDOKTERAN->value => Faculty::KEDOKTERAN->value,
                            Faculty::FKIP->value => Faculty::FKIP->value,
                        ])
                        ->reactive()
                        ->required()
                        ->afterStateUpdated(fn (callable $set) => $set('major', null)),

                    Select::make('major')
                        ->options(fn (callable $get) => match ($get('faculty')) {
                            Faculty::TEKNIK->value => [
                                Major::TEKNIK_SIPIL->value => Major::TEKNIK_SIPIL->value,
                                Major::TEKNIK_MESIN->value => Major::TEKNIK_MESIN->value,
                                Major::TEKNIK_INDUSTRI->value => Major::TEKNIK_INDUSTRI->value,
                                Major::TEKNIK_KIMIA->value => Major::TEKNIK_KIMIA->value,
                                Major::TEKNIK_ELEKTRO->value => Major::TEKNIK_ELEKTRO->value,
                                Major::ARSITEKTUR->value => Major::ARSITEKTUR->value,
                                Major::TEKNIK_INFORMATIKA->value => Major::TEKNIK_INFORMATIKA->value,
                                Major::SISTEM_INFORMASI->value => Major::SISTEM_INFORMASI->value,
                                Major::TEKNIK_MATERIAL->value => Major::TEKNIK_MATERIAL->value,
                                Major::TEKNIK_LOGISTIK->value => Major::TEKNIK_LOGISTIK->value,
                            ],
                            Faculty::EKONOMI_DAN_BISNIS->value => [
                                Major::D3_KESEKRETARIATAN->value => Major::D3_KESEKRETARIATAN->value,
                                Major::MANAJEMEN->value => Major::MANAJEMEN->value,
                                Major::AKUNTANSI->value => Major::AKUNTANSI->value,
                                Major::EKONOMI_PEMBANGUNAN->value => Major::EKONOMI_PEMBANGUNAN->value,
                                Major::EKONOMI_ISLAM->value => Major::EKONOMI_ISLAM->value,
                                Major::KEWIRAUSAHAAN->value => Major::KEWIRAUSAHAAN->value,
                            ],
                            Faculty::PERTANIAN->value => [
                                Major::AGROEKOTEKNOLOGI->value => Major::AGROEKOTEKNOLOGI->value,
                                Major::AGRIBISNIS->value => Major::AGRIBISNIS->value,
                                Major::AKUAKULTUR->value => Major::AKUAKULTUR->value,
                                Major::ILMU_KELAUTAN->value => Major::ILMU_KELAUTAN->value,
                            ],
                            Faculty::FISIP->value => [
                                Major::ADMINISTRASI_PUBLIK->value => Major::ADMINISTRASI_PUBLIK->value,
                                Major::ILMU_POLITIK->value => Major::ILMU_POLITIK->value,
                                Major::ANTROPOLOGI->value => Major::ANTROPOLOGI->value,
                                Major::ILMU_KOMUNIKASI->value => Major::ILMU_KOMUNIKASI->value,
                                Major::SOSIOLOGI->value => Major::SOSIOLOGI->value,
                                Major::ADMINISTRASI_BISNIS->value => Major::ADMINISTRASI_BISNIS->value,
                            ],
                            Faculty::HUKUM->value => [
                                Major::ILMU_HUKUM->value => Major::ILMU_HUKUM->value,
                            ],
                            Faculty::KEDOKTERAN->value => [
                                Major::PENDIDIKAN_PROFESI_DOKTER->value => Major::PENDIDIKAN_PROFESI_DOKTER->value,
                                Major::KEDOKTERAN->value => Major::KEDOKTERAN->value,
                                Major::PSIKOLOGI->value => Major::PSIKOLOGI->value,
                                Major::D3_KEPERAWATAN->value => Major::D3_KEPERAWATAN->value,
                            ],
                            Faculty::FKIP->value => [
                                Major::PENDIDIKAN_MATEMATIKA->value => Major::PENDIDIKAN_MATEMATIKA->value,
                                Major::PENDIDIKAN_FISIKA->value => Major::PENDIDIKAN_FISIKA->value,
                                Major::PENDIDIKAN_KIMIA->value => Major::PENDIDIKAN_KIMIA->value,
                                Major::PENDIDIKAN_BAHASA_INDONESIA->value => Major::PENDIDIKAN_BAHASA_INDONESIA->value,
                                Major::PENDIDIKAN_VOKASIONAL_TEKNIK_MESIN->value => Major::PENDIDIKAN_VOKASIONAL_TEKNIK_MESIN->value,
                                Major::PENDIDIKAN_PROFESI_GURU->value => Major::PENDIDIKAN_PROFESI_GURU->value,
                            ],
                            default => [],
                        })
                        ->default(fn (callable $get) => $get('major'))
                        ->required(),

                    Select::make('blood_type')
                        ->options(BloodType::type)
                        ->required(),
                ])
                ->columns(1)
        ]);
}

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image'),
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('member_id')->sortable()->searchable(),
                TextColumn::make('faculty')->sortable()->searchable(),
                TextColumn::make('major')->sortable()->searchable(),
                TextColumn::make('blood_type')->sortable()->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('faculty')
                    ->options(collect(Faculty::cases())
                        ->mapWithKeys(fn ($faculty) => [$faculty->value => $faculty->value])
                        ->toArray())
                    ->label('Faculty'),
                SelectFilter::make('major')
                    ->options(collect(Major::cases())
                        ->mapWithKeys(fn ($major) => [$major->value => $major->value])
                        ->toArray())
                    ->label('Major'),
                SelectFilter::make('blood_type')
                    ->options(BloodType::type)
                    ->label('Blood Type'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVolunteers::route('/'),
            'create' => Pages\CreateVolunteer::route('/create'),
            'edit' => Pages\EditVolunteer::route('/{record}/edit'),
        ];
    }
}

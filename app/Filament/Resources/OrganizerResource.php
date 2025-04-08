<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Period;
use Filament\Forms\Form;
use App\Models\Organizer;
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
use Filament\Tables\Columns\TextInputColumn;
use App\Filament\Resources\OrganizerResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\OrganizerResource\RelationManagers;

class OrganizerResource extends Resource
{
    protected static ?string $model = Organizer::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';

    protected static ?string $navigationGroup = 'structures';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Section::make('Main Content')->schema(
                [
                    Select::make('period_id')
                        ->relationship('periods', 'name')
                        ->getOptionLabelFromRecordUsing(fn (Period $record) => "{$record->name} ({$record->start} - {$record->end})")
                        ->preload()
                        ->required(),
                    Select::make('volunteer_id')
                        ->relationship('volunteers', 'name')
                        ->searchable(['name', 'member_id'])
                        ->getOptionLabelFromRecordUsing(fn (Volunteer $record) => "{$record->name} -{$record->member_id}")
                        ->preload()
                        ->required(),
                    Select::make('position_id')
                        ->relationship('positions', 'name')
                        ->preload()
                        ->required(),

                ]
            )->columns(1)
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('volunteers.image')->label('Image'),
                TextColumn::make('volunteers.name')->label('Name')->sortable()->searchable(),
                TextColumn::make('volunteers.member_id')->label('Member ID')->sortable()->searchable(),
                TextColumn::make('positions.name')->label('Position')->sortable()->searchable(),
                TextColumn::make('periods.name')
                    ->label('Period')
                    ->sortable()
                    ->searchable()
                    ->getStateUsing(function ($record) {
                        $period = $record->periods; // Mengakses relasi periods
                        return "{$period->name} ({$period->start} - {$period->end})"; // Format yang diinginkan
                    }),
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
                SelectFilter::make('period_id')
                    ->options(Period::all()->mapWithKeys(function ($period) {
                        return [
                            $period->id => "{$period->name} ({$period->start} - {$period->end})"
                        ];
                    }))
                    ->selectablePlaceholder(false)
                    ->default(Period::orderBy('end', 'desc')->first()->id) // Mengambil ID berdasarkan end_date terakhir
                    ->label('Period'),
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
            'index' => Pages\ListOrganizers::route('/'),
            'create' => Pages\CreateOrganizer::route('/create'),
            'edit' => Pages\EditOrganizer::route('/{record}/edit'),
        ];
    }
}

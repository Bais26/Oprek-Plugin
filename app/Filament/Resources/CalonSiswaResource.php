<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CalonSiswaResource\Pages;
use App\Filament\Resources\CalonSiswaResource\RelationManagers;
use App\Models\CalonSiswa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CalonSiswaResource extends Resource
{
    protected static ?string $model = CalonSiswa::class;

    protected static ?string $navigationGroup = 'Kelas';
    protected static ?string $slug = 'calon-siswa';
    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('nama')->sortable(),
            Tables\Columns\TextColumn::make('email')->sortable(),
            Tables\Columns\TextColumn::make('alamat')->sortable(),
            Tables\Columns\TextColumn::make('jurusan')->sortable(),
            Tables\Columns\TextColumn::make('semester')->sortable(),
            Tables\Columns\TextColumn::make('squad')->sortable(),
            Tables\Columns\TextColumn::make('institusi')->sortable(),
            Tables\Columns\TextColumn::make('no_wa')->sortable(),
            Tables\Columns\TextColumn::make('jenis_kelamin')->sortable(),
            Tables\Columns\TextColumn::make('status_seleksi')->sortable(),
            Tables\Columns\TextColumn::make('created_at')->dateTime(),
        ])
        ->filters([
            // Filter berdasarkan status seleksi
            Tables\Filters\SelectFilter::make('status_seleksi')
                ->options([
                    'pending' => 'Pending',
                    'lolos' => 'Lolos',
                    'tidak_lolos' => 'Tidak Lolos'
                ])
                ->label('Status Seleksi'),

            // Filter berdasarkan squad
            Tables\Filters\SelectFilter::make('squad')
                ->options(function () {
                    return CalonSiswa::distinct()->pluck('squad', 'squad')->toArray();
                })
                ->label('Squad'),

            // Filter berdasarkan jenis kelamin
            Tables\Filters\SelectFilter::make('jenis_kelamin')
                ->options([
                    'laki-laki' => 'Laki-laki',
                    'perempuan' => 'Perempuan'
                ])
                ->label('Jenis Kelamin'),

            // Filter berdasarkan institusi (asal sekolah)
            Tables\Filters\SelectFilter::make('institusi')
                ->options(function () {
                    return CalonSiswa::distinct()->pluck('institusi', 'institusi')->toArray();
                })
                ->label('Institusi'),
        ])
        ->actions([
            Tables\Actions\Action::make('update_status')
                ->label('Update Status')
                ->form([
                    Forms\Components\Select::make('status_seleksi')
                        ->options([
                            'pending' => 'Pending',
                            'lolos' => 'Lolos',
                            'tidak_lolos' => 'Tidak Lolos'
                        ])
                        ->required()
                        ->default('pending')
                ])
                ->action(function ($record, $data) {
                    // Update status seleksi berdasarkan data yang diberikan
                    $record->update([
                        'status_seleksi' => $data['status_seleksi']
                    ]);
                }),
        ]);
    }

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')->required(),
                Forms\Components\TextInput::make('email')->email()->unique()->required(),
                Forms\Components\TextArea::make('alamat')->required(),
                Forms\Components\TextInput::make('jurusan')->required(),
                Forms\Components\TextInput::make('semester')->required(),
                Forms\Components\TextInput::make('squad')->required(),
                Forms\Components\TextInput::make('institusi')->required(),
                Forms\Components\TextInput::make('no_wa')->required(),
                Forms\Components\Select::make('jenis_kelamin')
                    ->options([
                        'laki-laki' => 'Laki-laki',
                        'perempuan' => 'Perempuan',
                    ])
                    ->required(),
            ]);
        }

    // public static function table(Tables\Table $table): Tables\Table
    // {
    //     return $table
    //         ->columns([
    //             Tables\Columns\TextColumn::make('user.name')->label('User'),
    //             Tables\Columns\TextColumn::make('kelas.title')->label('Kelas'),
    //             Tables\Columns\TextColumn::make('status')->label('Status'),
    //         ])
    //         ->filters([
    //             //
    //         ])
    //         ->actions([
    //             //
    //         ])
    //         ->bulkActions([
    //             //
    //         ]);
    // }
    public static function canCreate(): bool
{
    return false;
}
public static function getPluralModelLabel(): string
{
    return 'Calon Siswa';
}



    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCalonSiswa::route('/'),
        ];
    }
}

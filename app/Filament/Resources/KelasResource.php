<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KelasResource\Pages;
use App\Filament\Resources\KelasResource\RelationManagers;
use Filament\Forms\Components\FileUpload;
use App\Models\Kelas;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KelasResource extends Resource
{
    protected static ?string $model = Kelas::class;
    protected static ?string $navigationGroup = 'Kelas';


    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required(),
                Textarea::make('description')->required(),
                Select::make('category')->options([
                    'Website' => 'Website',
                    'Mobile' => 'Mobile',
                    'All' => 'All',
                ])->required(),
                FileUpload::make('thumbnail')
                    ->image()  // Hanya menerima gambar
                    ->maxSize(2048)  // Maksimal ukuran file 2MB
                    ->disk('public')  // Menyimpan di disk public
                    ->directory('thumbnail')  // Menyimpan di folder mentor_photos di dalam storage
                    ->visibility('public')  // Menandai file agar dapat diakses secara publik
                    ->preserveFilenames()  // Menyimpan file dengan nama asli
                    ->required(),  // Membuatnya wajib diisi
                TextInput::make('mentor_name')->required(),
                FileUpload::make('mentor_photo')  // Nama field di model
                    ->image()  // Hanya menerima gambar
                    ->maxSize(2048)  // Maksimal ukuran file 2MB
                    ->disk('public')  // Menyimpan di disk public
                    ->directory('mentor_photos')  // Menyimpan di folder mentor_photos di dalam storage
                    ->visibility('public')  // Menandai file agar dapat diakses secara publik
                    ->preserveFilenames()  // Menyimpan file dengan nama asli
                    ->required(),  // Membuatnya wajib diisi
                RichEditor::make('class_information')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'underline',
                        'strike',
                        'link',
                        'blockquote',
                        'orderedList',
                        'unorderedList',
                        'h2',
                        'h3',
                        'h4',
                        'codeBlock',
                    ])
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mentor_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mentor_photo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
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
            'index' => Pages\ListKelas::route('/'),
            'create' => Pages\CreateKelas::route('/create'),
            'edit' => Pages\EditKelas::route('/{record}/edit'),
        ];
    }
}

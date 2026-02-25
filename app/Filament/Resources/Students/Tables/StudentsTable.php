<?php

namespace App\Filament\Resources\Students\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class StudentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nis')->label('NIS'),
                TextColumn::make('name')->label('Nama')->sortable(),
                TextColumn::make('gender')->label('Gender'),
                TextColumn::make('majors.name_major')->label('Jurusan'),
                TextColumn::make('date_of_birth')->label('Tanggal Lahir'),
                TextColumn::make('address')->label('Alamat'),
            ])
            ->filters([
                SelectFilter::make('gender')->options([
                    'l' => 'Laki-laki',
                    'p' => 'Perempuan',
                ])
            ])
            ->pushColumns([
                TextColumn::make('created_at')
                    ->label('Created')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->label('Updated')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}

<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static string $view = 'filament.pages.dashboard';
    protected static ?string $slug = '/';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationLabel = 'Главная';
    protected static ?string $modelLabel = 'Главная';

    public function getViewData(): array
    {
        $user = Auth::user();

        if (!$user) {
            return [
                'name' => 'Гость',
                'email' => 'Нет данных',
                'roles' => [],
                'joined' => 'Нет данных',
                'lastLogin' => 'Недоступно',
            ];
        }

        $user->load('roles');

        return [
            'name' => $user->name ?? 'Неизвестно',
            'email' => $user->email ?? 'Нет данных',
            'roles' => $user->roles->pluck('name')->toArray() ?? [],
            'joined' => $user->created_at?->format('d M, Y') ?? 'Нет данных',
            'lastLogin' => $user->last_login_at?->format('d M, Y H:i') ?? 'Недоступно',
        ];
    }
}

<?php

declare(strict_types=1);

namespace App\Enums;

use Filament\Support\Colors\Color;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;

enum Status: string implements HasColor, HasIcon, HasLabel
{
    case Disponible = 'disponible';
    case EnPreparacion = 'en_preparacion';
    case ProximaEntrada = 'proxima_entrada';
    case Reservada = 'reservada';
    case Vendida = 'vendida';

    public function getLabel(): string
    {
        return match ($this) {
            Status::Disponible => 'Disponible',
            Status::EnPreparacion => 'En preparación',
            Status::ProximaEntrada => 'Próxima entrada',
            Status::Reservada => 'Reservada',
            Status::Vendida => 'Vendida',
        };
    }

    public function getColor(): array
    {
        return match ($this) {
            Status::Disponible => Color::Green,
            Status::EnPreparacion => Color::Slate,
            Status::ProximaEntrada => Color::Blue,
            Status::Reservada => Color::Red,
            Status::Vendida => Color::Gray,
        };
    }

    public function getIcon(): Heroicon
    {
        return match ($this) {
            Status::Disponible => Heroicon::CheckCircle,
            Status::EnPreparacion => Heroicon::WrenchScrewdriver,
            Status::ProximaEntrada => Heroicon::ArrowDownCircle,
            Status::Reservada => Heroicon::LockClosed,
            Status::Vendida => Heroicon::Banknotes,
        };
    }
}

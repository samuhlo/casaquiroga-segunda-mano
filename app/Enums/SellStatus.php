<?php

declare(strict_types=1);

namespace App\Enums;

use Filament\Support\Colors\Color;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;

enum SellStatus: string implements HasColor, HasIcon, HasLabel
{
    case Available = 'disponible';
    case InPreparation = 'en_preparacion';
    case ArriveSoon = 'proxima_entrada';
    case Reserved = 'reservada';
    case Sold = 'vendida';

    public function getLabel(): string
    {
        return match ($this) {
            SellStatus::Available => 'Disponible',
            SellStatus::InPreparation => 'En preparación',
            SellStatus::ArriveSoon => 'Próxima entrada',
            SellStatus::Reserved => 'Reservada',
            SellStatus::Sold => 'Vendida',
        };
    }

    public function getColor(): array
    {
        return match ($this) {
            SellStatus::Available => Color::Green,
            SellStatus::InPreparation => Color::Slate,
            SellStatus::ArriveSoon => Color::Blue,
            SellStatus::Reserved => Color::Red,
            SellStatus::Sold => Color::Gray,
        };
    }

    public function getIcon(): Heroicon
    {
        return match ($this) {
            SellStatus::Available => Heroicon::CheckCircle,
            SellStatus::InPreparation => Heroicon::WrenchScrewdriver,
            SellStatus::ArriveSoon => Heroicon::ArrowDownCircle,
            SellStatus::Reserved => Heroicon::LockClosed,
            SellStatus::Sold => Heroicon::Banknotes,
        };
    }
}

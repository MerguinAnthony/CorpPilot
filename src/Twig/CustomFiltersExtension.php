<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class CustomFiltersExtension extends AbstractExtension
{
  public function getFilters()
  {
    return [
      new TwigFilter('formatHours', [$this, 'formatHoursFilter']),
    ];
  }

  public function formatHoursFilter($hoursAvailable)
  {
    // Mettez ici la logique de conversion des heures en format souhaité
    $hours = floor($hoursAvailable);
    $minutesDecimal = ($hoursAvailable - $hours) * 60;
    $minutes = round($minutesDecimal);

    return $hours . 'h' . str_pad($minutes, 2, '0', STR_PAD_LEFT);
  }
}

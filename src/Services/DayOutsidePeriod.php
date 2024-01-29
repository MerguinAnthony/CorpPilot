<?php

// src/Service/DaysOutsidePeriod.php

namespace App\Service;

use DateTime;

class DaysOutsidePeriod
{
  private DaysBetweenDates $daysBetweenDates;

  public function __construct(DaysBetweenDates $daysBetweenDates)
  {
    $this->daysBetweenDates = $daysBetweenDates;
  }

  public function getWorkingDaysOutsidePeriod(DateTime $startDate, DateTime $endDate, array $holidays = []): int
  {
    $workingDays = 0;
    $currentDate = clone $startDate;

    while ($currentDate <= $endDate) {
      // Exclure les samedis, dimanches, jours fériés et jours en dehors de la période
      if ($currentDate->format('N') < 6 && !in_array($currentDate->format('Y-m-d'), $holidays) && $currentDate >= $startDate && $currentDate <= $endDate) {
        $workingDays++;
      }

      $currentDate->modify('+1 day');
    }

    // Appliquer la logique spécifique pour les gains de jours de congé supplémentaires
    $additionalDays = $this->calculateAdditionalDays($startDate, $endDate, $workingDays, $holidays);

    return $workingDays + $additionalDays;
  }


  // Dans DaysOutsidePeriod.php
  private function calculateAdditionalDays(DateTime $startDate, DateTime $endDate, int $workingDays, array $holidays = []): int
  {
    // Logique spécifique pour déterminer les jours supplémentaires en fonction des périodes
    // Vous pouvez ajuster cette logique selon vos critères spécifiques
    $additionalDays = 0;

    // Exemple : Si l'employé prend des jours de congé entre janvier-avril et novembre-décembre
    // et qu'il a posé 5 jours ou plus, il gagne 1 jour supplémentaire.
    // S'il a posé 8 jours ou plus, il gagne 2 jours supplémentaires.


    $janAprilPeriod = DateTime::createFromFormat('m-d', '01-01');
    $janAprilPeriod->modify('last day of April');

    $novDecPeriod = DateTime::createFromFormat('m-d', '11-01');
    $novDecPeriod->modify('last day of December');

    if (
      ($startDate < $janAprilPeriod && $endDate <= $janAprilPeriod) ||
      ($startDate < $novDecPeriod && $endDate <= $novDecPeriod)
    ) {
      if ($workingDays >= 5 && $workingDays < 8) {
        $additionalDays = 1;
      } elseif ($workingDays >= 8) {
        $additionalDays = 2;
      }
    }


    return $additionalDays;
  }
}

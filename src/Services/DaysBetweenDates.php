<?php

// src/Service/DaysBetweenDates.php

namespace App\Service;

use App\Service\IsHoliday;
use DateTime; // Importer la classe DateTime

class DaysBetweenDates
{
  private IsHoliday $isHoliday;

  public function __construct(IsHoliday $isHoliday)
  {
    $this->isHoliday = $isHoliday;
  }

  public function getWorkingDaysBetweenDates($startDate, $endDate)
  {
    $workingDays = 0;

    $currentDate = clone $startDate;

    while ($currentDate <= $endDate) {
      // Exclure les samedis, dimanches et jours fériés
      if ($currentDate->format('N') < 6 && !$this->isHoliday->isHoliday($currentDate)) {
        $workingDays++;
      }

      $currentDate->modify('+1 day');
    }

    return $workingDays;
  }
}

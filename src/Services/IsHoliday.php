<?php
// src/Service/IsHoliday.php

namespace App\Service;

class IsHoliday
{
  // Fonction pour vérifier si une date est un jour férié
  public function isHoliday($date)
  {
    $apiUrl = 'https://date.nager.at/api/v3/PublicHolidays/2024/FR';

    // Formatage de la date au format 'Y-m-d' pour la requête API
    $formattedDate = $date->format('Y-m-d');

    // Envoie de la requête à l'API
    $response = file_get_contents($apiUrl);

    // Analyse de la réponse JSON
    $holidays = json_decode(
      $response,
      true
    );

    // Vérification si la date est un jour férié
    foreach ($holidays as $holiday) {
      if ($holiday['date'] === $formattedDate) {
        return true;
      }
    }

    return false;
  }
}

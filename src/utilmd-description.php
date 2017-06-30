<?php
return [
    'name' => 'Utilmd Segment Beschreibung',
    'bgm_type' => [
        'E01' => 'Anmeldung (Netznutzung)',
        'E02' => 'Abmeldung (Netznutzung)',
        'E03' => 'Änderungsmeldung',
        'E27' => 'Anfrage',
        'E35' => 'Kündigung Liefervertrag',
        'E44' => 'Informationsmeldung (Zur Auflösung der Lieferkonkurenz)',
        'E48' => 'Anmeldung Beistellung',
        'E50' => 'Abmeldung Beistellung',
        'Z08' => 'Neuzuordnung vom Zählpunkt',
    ],

    'reason' => [
        'E01' => 'Ein-/Auszug (Umzug)',
        'E02' => 'Ein-Auszug/Neuanlage',
        'E03' => 'Lieferantenwechsel',
        'E05' => 'Stornierung',
        'Z03' => 'Ersat-z oder Grundversorgung (Alte Version)',
        'Z26' => 'Information über existierende Zuordnung.',
        'Z33' => 'Auszug/Stillegung',
        'Z42' => 'Keinen Code',
        'Z46' => 'Änderungsmitteilung nicht bilanzierungsrel. Daten',
        'Z47' => 'Änderungsmitteilung von bilanzierungsrel. Daten',
        'ZE6' => 'Nicht bilanzierungsrelevante Änderung vom LF',
        'ZE7' => 'Nicht bilanzierungsrelevante Änderung vom NB',
        'ZC8' => 'Beendigung der Zuordnung',
        'ZC9' => 'Aufhebung einer zukünftigen Zuordnung',
        'ZD2' => 'Ersatzversorgung',
    ],

    'answer' => [
        'E09' => 'Ablehnung (Lieferadresse nicht im Verteilnetz)',
        'E10' => 'Ablehnung (Lieferadresse nicht identifizierbar)',
        'E11' => 'Ablehnung (Messproblem)',
        'E12' => 'Ablehnung (unklares Lieferverhältnis)',
        'E13' => 'Ablehnung (Bilanzierungsproblem)',
        'E14' => 'Ablehnung (Sonstiges)',
        'E15' => 'Zustimmung ohne Korrekturen',
        'E17' => 'Ablehnung (Fristüberschreitung)',
        'Z01' => 'Zustimmung (Terminänderung)',
        'Z05' => 'Empfänger-MP-ID und Empfänger stimmen nicht überein',
        'Z06' => 'Ablehnung (Kunde nicht identifizierbar)',
        'Z07' => 'Ablehnung (Keine Berechtigung)',
        'Z08' => 'Ablehnung (Transaktion schon stattgefunden)',
        'Z09' => 'Ablehnung (Transaktion unplausibel)',
        'Z10' => 'Ablehnung (Abmeldung fehlt)',
        'Z11' => 'Ablehnung (Termin fehlt)',
        'Z12' => 'Ablehnung (Vertragsbindung)',
        'Z13' => 'Ablehnung (Meldung nicht identifizierbar)',
        'Z14' => 'Ablehnung (Doppeltmeldung)',
        'Z29' => 'Ablehnung (kein Vertragsverhältnis)',
        'Z34' => 'Ablehnung (Mehrfachkündigung)',
        'Z35' => 'Ablehnung der Abmeldungsanfrage.',
        'Z43' => 'Zustimmung mit Korrektur von bilanzierungsrel. Daten',
        'Z44' => 'Zustimmung mit Korrektur von nicht bilanzierungsrel. Daten',
        'Z47' => 'Änderungsmitteilung von bilanzierungsrel. Daten',
        'ZC5' => 'Ablehnung (andere Anmeldung in Bearbeitung)',
        'ZE0' => 'Ablehnung Stammdaten richtig',
        'ZE1' => 'Ablehnung zu stornierender Vorgang wurde schon beantwortet',
        'ZE2' => 'Ablehnung Kapazitätsprobleme',
    ]
];
<?php
$age = $_GET['age'] ?? '';
$weight = $_GET['weight'] ?? '';
$goal = $_GET['goal'] ?? '';
$days = $_GET['days'] ?? '';

function createTrainingplan($age, $weight, $goal, $days)
{
    $plans = [
        '16-20' => [
            'Junge Erwachsene' => [
                'abnehmen' => [
                    'leicht' => [
                        2 => [
                            'Tag 1' => [
                                ['Übung' => 'Radfahren', 'dauer' => '60 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ]
                        ],
                        3 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '45 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '45 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'HIIT', 'dauer' => '30 Minuten', 'bild' => ''],
                            ]
                        ],
                        4 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '45 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '45 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Laufen', 'dauer' => '45 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                        ],
                        5 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Walking', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                        ],
                        6 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Walking', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                            'Tag 6' => [
                                ['Übung' => 'Radfahren', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                        ],
                    ],
                    'normal' => [
                        // Trainingsplan für "normal" Gewicht und "abnehmen" Ziel
                        2 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '60 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '60 Minuten', 'bild' => ''],
                            ]
                        ],
                        3 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten', 'bild' => ''],
                            ]
                        ],
                        4 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                        ],
                        5 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '25 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '25 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Laufen', 'dauer' => '25 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Walking', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                        ],
                        6 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Laufen', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Walking', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                            'Tag 6' => [
                                ['Übung' => 'Radfahren', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                        ],
                    ],
                    'schwer' => [
                        2 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '60 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '60 Minuten', 'bild' => ''],
                            ]
                        ],
                        3 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '50 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '50 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '50 Minuten', 'bild' => ''],
                            ]
                        ],
                        4 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '40 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '40 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                        ],
                        5 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '25 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '25 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Laufen', 'dauer' => '25 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Walking', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                        ],
                        6 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '40 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Walking', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 6' => [
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                        ],
                    ],
                    'sehr_schwer' => [
                        2 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '60 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '60 Minuten', 'bild' => ''],
                            ]
                        ],
                        3 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '50 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '50 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '50 Minuten', 'bild' => ''],
                            ]
                        ],
                        4 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '40 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '40 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                        ],
                        5 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '25 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '25 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Laufen', 'dauer' => '25 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Walking', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                        ],
                        6 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '25 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '25 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Laufen', 'dauer' => '25 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Walking', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                            'Tag 6' => [
                                ['Übung' => 'Radfahren', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                        ],
                    ]
                ],
                'gewicht_halten' => [
                    // Beispiel für Trainingsplan für "Gewicht halten" Ziel
                    'leicht' => [
                        2 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ]
                        ],
                        3 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '45 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '45 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ]
                        ],
                        4 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                        ],
                        5 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '30min', 'bild' => ''],
                            ],
                        ],
                        6 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '30min', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Laufen', 'dauer' => '30min', 'bild' => ''],
                            ],
                        ],
                    ],
                    'normal' => [
                        2 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ]
                        ],
                        3 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '45 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '45 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ]
                        ],
                        4 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                        ],
                        5 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '30min', 'bild' => ''],
                            ],
                        ],
                        6 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '30min', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Laufen', 'dauer' => '30min', 'bild' => ''],
                            ],
                        ],
                    ],
                    'schwer' => [
                        2 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '35-40 Minuten bei mittlerer Intensität', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 10-12 Wiederholungen (ggf. mit Zusatzgewicht oder Unterstützung)', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '35-40 Minuten bei moderatem Tempo', 'bild' => ''],
                            ]
                        ],
                        3 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '45 Minuten bei mittlerer Intensität', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (ggf. mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '45 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '35-40 Minuten bei mittlerer Intensität', 'bild' => ''],
                            ]
                        ],
                        4 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '35 Minuten bei mittlerer Intensität', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '35 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '35 Minuten bei mittlerer Intensität', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                        ],
                        5 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '40 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '40 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '40 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '40 Minuten', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                        ],
                        6 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '40 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '40 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '40 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '40 Minuten', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 6' => [
                                ['Übung' => 'Laufen', 'dauer' => '40 Minuten', 'bild' => ''],
                            ],
                        ],
                    ],
                    'sehr schwer' => [
                        2 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen (ggf. mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '45 Minuten bei mittlerer Intensität', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 10-12 Wiederholungen (ggf. mit Zusatzgewicht oder Unterstützung)', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '45 Minuten bei moderatem Tempo', 'bild' => ''],
                            ]
                        ],
                        3 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen (ggf. mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei mittlerer Intensität', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (ggf. mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '50 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit zusätzlichem Gewicht, z.B. Langhantel)', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '45 Minuten bei hoher Intensität', 'bild' => ''],
                            ]
                        ],
                        4 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '45 Minuten bei mittlerer bis hoher Intensität', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '50 Minuten bei moderatem Tempo', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht, Langhantel)', 'bild' => ''],
                                ['Übung' => 'Calf Raises', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei mittlerer Intensität', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '40-45 Minuten bei mäßigem Tempo', 'bild' => ''],
                            ],
                        ],
                        5 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei mittlerer bis hoher Intensität', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '50 Minuten bei mittlerem bis hohem Tempo', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit zusätzlichem Gewicht, Langhantel)', 'bild' => ''],
                                ['Übung' => 'Calf Raises', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei hoher Intensität', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '45-50 Minuten bei hohem Tempo', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '35-40 Minuten', 'bild' => ''],
                            ],
                        ],
                        6 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei mittlerer bis hoher Intensität', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '50 Minuten bei moderatem bis hohem Tempo', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht, Langhantel)', 'bild' => ''],
                                ['Übung' => 'Calf Raises', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei mittlerer bis hoher Intensität', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '50 Minuten bei hohem Tempo', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '35 Minuten', 'bild' => ''],
                            ],
                            'Tag 6' => [
                                ['Übung' => 'Laufen', 'dauer' => '50 Minuten bei hohem Tempo', 'bild' => ''],
                            ],
                        ],
                    ]
                ],

                'muskeln_aufbauen' => [
                    'leicht' => [
                        2 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Dips ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Kniebeugen  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Step-Ups ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                        3 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                        4 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Beinpresse', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hip Thrusts', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preachercurls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Unterarm-Curls (Handgelenks-Curls)', 'dauer' => '3 Sätze x 15 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Unterarm-Curls', 'dauer' => '3 Sätze x 15 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                        5 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über Kopf)', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Beinpresse', 'dauer' => '4 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Beinstrecker', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Beinbizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben (stehend oder sitzend)', 'dauer' => '4 Sätze x 12-15 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 15-20 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Schulterdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterziehen', 'dauer' => '4 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über Kopf mit Seil)', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                        6 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 6' => [
                                ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                    ],
                    'normal' => [
                        2 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Dips ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Kniebeugen  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Step-Ups ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                        3 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                        4 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Beinpresse', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hip Thrusts', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preachercurls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Unterarm-Curls (Handgelenks-Curls)', 'dauer' => '3 Sätze x 15 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Unterarm-Curls', 'dauer' => '3 Sätze x 15 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                        5 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über Kopf)', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Beinpresse', 'dauer' => '4 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Beinstrecker', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Beinbizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben (stehend oder sitzend)', 'dauer' => '4 Sätze x 12-15 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 15-20 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Schulterdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterziehen', 'dauer' => '4 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über Kopf mit Seil)', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                        6 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 6' => [
                                ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                    ],
                    'schwer' => [
                        2 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Dips ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Kniebeugen  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Step-Ups ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                        3 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                        4 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Beinpresse', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hip Thrusts', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preachercurls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Unterarm-Curls (Handgelenks-Curls)', 'dauer' => '3 Sätze x 15 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Unterarm-Curls', 'dauer' => '3 Sätze x 15 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                        5 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über Kopf)', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Beinpresse', 'dauer' => '4 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Beinstrecker', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Beinbizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben (stehend oder sitzend)', 'dauer' => '4 Sätze x 12-15 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 15-20 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Schulterdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterziehen', 'dauer' => '4 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über Kopf mit Seil)', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                        6 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 6' => [
                                ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                    ],
                    'sehr schwer' => [
                        2 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Dips ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Kniebeugen  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Step-Ups ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                        3 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                        4 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Beinpresse', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hip Thrusts', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preachercurls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Unterarm-Curls (Handgelenks-Curls)', 'dauer' => '3 Sätze x 15 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Unterarm-Curls', 'dauer' => '3 Sätze x 15 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                        5 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über Kopf)', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Beinpresse', 'dauer' => '4 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Beinstrecker', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Beinbizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben (stehend oder sitzend)', 'dauer' => '4 Sätze x 12-15 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 15-20 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Schulterdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterziehen', 'dauer' => '4 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über Kopf mit Seil)', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                        6 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 6' => [
                                ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        '21-30' => [
            'Erwachsene' => [
                'abnehmen' => [
                    'leicht' => [
                        2 => [
                            'Tag 1' => [
                                ['Übung' => 'Radfahren', 'dauer' => '60 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ]
                        ],
                        3 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '45 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '45 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'HIIT', 'dauer' => '30 Minuten', 'bild' => ''],
                            ]
                        ],
                        4 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '45 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '45 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Laufen', 'dauer' => '45 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                        ],
                        5 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Walking', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                        ],
                        6 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Walking', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                            'Tag 6' => [
                                ['Übung' => 'Radfahren', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                        ],
                    ],
                    'normal' => [
                        // Trainingsplan für "normal" Gewicht und "abnehmen" Ziel
                        2 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '60 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '60 Minuten', 'bild' => ''],
                            ]
                        ],
                        3 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten', 'bild' => ''],
                            ]
                        ],
                        4 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                        ],
                        5 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '25 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '25 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Laufen', 'dauer' => '25 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Walking', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                        ],
                        6 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Laufen', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Walking', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                            'Tag 6' => [
                                ['Übung' => 'Radfahren', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                        ],
                    ],
                    'schwer' => [
                        2 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '60 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '60 Minuten', 'bild' => ''],
                            ]
                        ],
                        3 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '50 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '50 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '50 Minuten', 'bild' => ''],
                            ]
                        ],
                        4 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '40 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '40 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                        ],
                        5 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '25 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '25 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Laufen', 'dauer' => '25 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Walking', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                        ],
                        6 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '40 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Walking', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 6' => [
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                        ],
                    ],
                    'sehr_schwer' => [
                        2 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '60 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '60 Minuten', 'bild' => ''],
                            ]
                        ],
                        3 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '50 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '50 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '50 Minuten', 'bild' => ''],
                            ]
                        ],
                        4 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '40 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '40 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                        ],
                        5 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '25 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '25 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Laufen', 'dauer' => '25 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Walking', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                        ],
                        6 => [
                            'Tag 1' => [
                                ['Übung' => 'Laufen', 'dauer' => '25 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Radfahren', 'dauer' => '25 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Laufen', 'dauer' => '25 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Walking', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                            'Tag 6' => [
                                ['Übung' => 'Radfahren', 'dauer' => '20 Minuten', 'bild' => ''],
                            ],
                        ],
                    ],

                ],
                'gewicht_halten' => [
                    'leicht' => [
                        2 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ]
                        ],
                        3 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '45 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '45 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ]
                        ],
                        4 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                        ],
                        5 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '30min', 'bild' => ''],
                            ],
                        ],
                        6 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '30min', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Laufen', 'dauer' => '30min', 'bild' => ''],
                            ],
                        ],
                    ],
                    'normal' => [
                        2 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ]
                        ],
                        3 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '45 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '45 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ]
                        ],
                        4 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                        ],
                        5 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '30min', 'bild' => ''],
                            ],
                        ],
                        6 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '30min', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Laufen', 'dauer' => '30min', 'bild' => ''],
                            ],
                        ],
                    ],
                    'schwer' => [
                        2 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '35-40 Minuten bei mittlerer Intensität', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 10-12 Wiederholungen (ggf. mit Zusatzgewicht oder Unterstützung)', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '35-40 Minuten bei moderatem Tempo', 'bild' => ''],
                            ]
                        ],
                        3 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '45 Minuten bei mittlerer Intensität', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (ggf. mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '45 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '35-40 Minuten bei mittlerer Intensität', 'bild' => ''],
                            ]
                        ],
                        4 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '35 Minuten bei mittlerer Intensität', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '35 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '35 Minuten bei mittlerer Intensität', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                        ],
                        5 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '40 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '40 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '40 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '40 Minuten', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                        ],
                        6 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '40 Minuten', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '40 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '40 Minuten', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '40 Minuten', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '30 Minuten', 'bild' => ''],
                            ],
                            'Tag 6' => [
                                ['Übung' => 'Laufen', 'dauer' => '40 Minuten', 'bild' => ''],
                            ],
                        ],
                    ],
                    'sehr schwer' => [
                        2 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen (ggf. mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '45 Minuten bei mittlerer Intensität', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 10-12 Wiederholungen (ggf. mit Zusatzgewicht oder Unterstützung)', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '45 Minuten bei moderatem Tempo', 'bild' => ''],
                            ]
                        ],
                        3 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen (ggf. mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei mittlerer Intensität', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (ggf. mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '50 Minuten', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit zusätzlichem Gewicht, z.B. Langhantel)', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '45 Minuten bei hoher Intensität', 'bild' => ''],
                            ]
                        ],
                        4 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '45 Minuten bei mittlerer bis hoher Intensität', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '50 Minuten bei moderatem Tempo', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht, Langhantel)', 'bild' => ''],
                                ['Übung' => 'Calf Raises', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei mittlerer Intensität', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '40-45 Minuten bei mäßigem Tempo', 'bild' => ''],
                            ],
                        ],
                        5 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei mittlerer bis hoher Intensität', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '50 Minuten bei mittlerem bis hohem Tempo', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit zusätzlichem Gewicht, Langhantel)', 'bild' => ''],
                                ['Übung' => 'Calf Raises', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei hoher Intensität', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '45-50 Minuten bei hohem Tempo', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '35-40 Minuten', 'bild' => ''],
                            ],
                        ],
                        6 => [
                            'Tag 1' => [
                                ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)', 'bild' => ''],
                                ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei mittlerer bis hoher Intensität', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '50 Minuten bei moderatem bis hohem Tempo', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht, Langhantel)', 'bild' => ''],
                                ['Übung' => 'Calf Raises', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei mittlerer bis hoher Intensität', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Laufen', 'dauer' => '50 Minuten bei hohem Tempo', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Schwimmen', 'dauer' => '35 Minuten', 'bild' => ''],
                            ],
                            'Tag 6' => [
                                ['Übung' => 'Laufen', 'dauer' => '50 Minuten bei hohem Tempo', 'bild' => ''],
                            ],
                        ],
                    ],
                ],
                'muskeln_aufbauen' => [
                    'leicht' => [
                        2 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Dips ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Kniebeugen  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Step-Ups ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                        3 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                        4 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Beinpresse', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hip Thrusts', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preachercurls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Unterarm-Curls (Handgelenks-Curls)', 'dauer' => '3 Sätze x 15 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Unterarm-Curls', 'dauer' => '3 Sätze x 15 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                        5 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über Kopf)', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Beinpresse', 'dauer' => '4 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Beinstrecker', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Beinbizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben (stehend oder sitzend)', 'dauer' => '4 Sätze x 12-15 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 15-20 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Schulterdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterziehen', 'dauer' => '4 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über Kopf mit Seil)', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                        6 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 6' => [
                                ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                    ],
                    'normal' => [
                        2 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Dips ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Kniebeugen  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Step-Ups ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                        3 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                        4 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Beinpresse', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hip Thrusts', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preachercurls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Unterarm-Curls (Handgelenks-Curls)', 'dauer' => '3 Sätze x 15 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Unterarm-Curls', 'dauer' => '3 Sätze x 15 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                        5 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über Kopf)', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Beinpresse', 'dauer' => '4 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Beinstrecker', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Beinbizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben (stehend oder sitzend)', 'dauer' => '4 Sätze x 12-15 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 15-20 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Schulterdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterziehen', 'dauer' => '4 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über Kopf mit Seil)', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                        6 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 6' => [
                                ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                    ],
                    'schwer' => [
                        2 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Dips ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Kniebeugen  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Step-Ups ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                        3 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                        4 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Beinpresse', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hip Thrusts', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preachercurls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Unterarm-Curls (Handgelenks-Curls)', 'dauer' => '3 Sätze x 15 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Unterarm-Curls', 'dauer' => '3 Sätze x 15 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                        5 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über Kopf)', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Beinpresse', 'dauer' => '4 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Beinstrecker', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Beinbizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben (stehend oder sitzend)', 'dauer' => '4 Sätze x 12-15 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 15-20 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Schulterdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterziehen', 'dauer' => '4 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über Kopf mit Seil)', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                        6 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 6' => [
                                ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                    ],
                    'sehr schwer' => [
                        2 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Dips ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Kniebeugen  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Step-Ups ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                        3 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                        4 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Beinpresse', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hip Thrusts', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preachercurls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Unterarm-Curls (Handgelenks-Curls)', 'dauer' => '3 Sätze x 15 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Unterarm-Curls', 'dauer' => '3 Sätze x 15 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                        5 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über Kopf)', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Kniebeugen', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Beinpresse', 'dauer' => '4 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Beinstrecker', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Beinbizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben (stehend oder sitzend)', 'dauer' => '4 Sätze x 12-15 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 15-20 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Schulterdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterziehen', 'dauer' => '4 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '4 Sätze x 8-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über Kopf mit Seil)', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 10-12 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                        6 => [
                            'Tag 1' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 2' => [
                                ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 3' => [
                                ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 4' => [
                                ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 5' => [
                                ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                            'Tag 6' => [
                                ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                                ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen', 'bild' => ''],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        '31-40' => [
            'Reife Erwachsene' => [
                'abnehmen' => [
                    
                ],
                'gewicht_halten' => [

                ],
                'muskeln_aufbauen' => [

                ],
            ],
        ],
        '41+' => [
            'Reife Erwachsene' => [
                'abnehmen' => [

                ],
                'gewicht_halten' => [

                ],
                'muskeln_aufbauen' => [

                ],
            ],
        ],
    ];

    // Trainingsplan zurückgeben je nach Eingabe des Benutzers
    if ($age >= 16 && $age <= 20) {
        $ageGroup = '16-20';
    } elseif ($age >= 21 && $age <= 40) {
        $ageGroup = '21-40';
    } else {
        $ageGroup = '41+';
    }

    // Gewichtskategorien filtern
    if ($weight >= 30 && $weight <= 59) {
        $weightCategory = 'leicht';
    } elseif ($weight >= 60 && $weight <= 84) {
        $weightCategory = 'normal';
    } elseif ($weight >= 85 && $weight <= 95) {
        $weightCategory = 'schwer';
    } else {
        $weightCategory = 'sehr_schwer';
    }

    // Trainingsziel filtern
    if ($goal == '1') {
        $goalName = 'abnehmen';
    } elseif ($goal == '2') {
        $goalName = 'gewicht_halten';
    } elseif ($goal == '3') {
        $goalName = 'muskeln_aufbauen';
    }

    // Trainingsplan zurückgeben
    return $plans[$ageGroup][$goalName][$weightCategory][$days] ?? null;
}

// Trainingsplan erstellen
$plan = createTrainingplan($age, $weight, $goal, $days);

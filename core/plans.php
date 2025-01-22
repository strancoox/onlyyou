<?php

function createTrainingplan($age, $weight, $goal, $days)
{
    $plans = [
        '16-20' => [
            'abnehmen' => [
                'leicht' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Radfahren', 'dauer' => '60 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ]
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'HIIT', 'dauer' => '30 Minuten'],
                        ]
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '30 Minuten'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Walking', 'dauer' => '20 Minuten'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Walking', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Radfahren', 'dauer' => '20 Minuten'],
                        ],
                    ],
                ],
                'normal' => [
                    // Trainingsplan für "normal" Gewicht und "abnehmen" Ziel
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '60 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '60 Minuten'],
                        ]
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ]
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Walking', 'dauer' => '20 Minuten'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Walking', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Radfahren', 'dauer' => '20 Minuten'],
                        ],
                    ],
                ],
                'schwer' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '60 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '60 Minuten'],
                        ]
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '50 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '50 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '50 Minuten'],
                        ]
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Walking', 'dauer' => '20 Minuten'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Walking', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                    ],
                ],
                'sehr_schwer' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '60 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '60 Minuten'],
                        ]
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '50 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '50 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '50 Minuten'],
                        ]
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Walking', 'dauer' => '20 Minuten'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Walking', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Radfahren', 'dauer' => '20 Minuten'],
                        ],
                    ],
                ]
            ],
            'gewicht_halten' => [
                // Beispiel für Trainingsplan für "Gewicht halten" Ziel
                'leicht' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ]
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ]
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '30min'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '30min'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Laufen', 'dauer' => '30min'],
                        ],
                    ],
                ],
                'normal' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ]
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ]
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '30min'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '30min'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Laufen', 'dauer' => '30min'],
                        ],
                    ],
                ],
                'schwer' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '35-40 Minuten bei mittlerer Intensität'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 10-12 Wiederholungen (ggf. mit Zusatzgewicht oder Unterstützung)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)'],
                            ['Übung' => 'Laufen', 'dauer' => '35-40 Minuten bei moderatem Tempo'],
                        ]
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '45 Minuten bei mittlerer Intensität'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (ggf. mit Zusatzgewicht)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)'],
                            ['Übung' => 'Laufen', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Radfahren', 'dauer' => '35-40 Minuten bei mittlerer Intensität'],
                        ]
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '35 Minuten bei mittlerer Intensität'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '35 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '35 Minuten bei mittlerer Intensität'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)'],
                            ['Übung' => 'Laufen', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '30 Minuten'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Laufen', 'dauer' => '40 Minuten'],
                        ],
                    ],
                ],
                'sehr schwer' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen (ggf. mit Zusatzgewicht)'],
                            ['Übung' => 'Radfahren', 'dauer' => '45 Minuten bei mittlerer Intensität'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 10-12 Wiederholungen (ggf. mit Zusatzgewicht oder Unterstützung)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)'],
                            ['Übung' => 'Laufen', 'dauer' => '45 Minuten bei moderatem Tempo'],
                        ]
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen (ggf. mit Zusatzgewicht)'],
                            ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei mittlerer Intensität'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (ggf. mit Zusatzgewicht)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)'],
                            ['Übung' => 'Laufen', 'dauer' => '50 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit zusätzlichem Gewicht, z.B. Langhantel)'],
                            ['Übung' => 'Radfahren', 'dauer' => '45 Minuten bei hoher Intensität'],
                        ]
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Radfahren', 'dauer' => '45 Minuten bei mittlerer bis hoher Intensität'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)'],
                            ['Übung' => 'Laufen', 'dauer' => '50 Minuten bei moderatem Tempo'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht, Langhantel)'],
                            ['Übung' => 'Calf Raises', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei mittlerer Intensität'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '40-45 Minuten bei mäßigem Tempo'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei mittlerer bis hoher Intensität'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)'],
                            ['Übung' => 'Laufen', 'dauer' => '50 Minuten bei mittlerem bis hohem Tempo'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit zusätzlichem Gewicht, Langhantel)'],
                            ['Übung' => 'Calf Raises', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei hoher Intensität'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '45-50 Minuten bei hohem Tempo'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '35-40 Minuten'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei mittlerer bis hoher Intensität'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '50 Minuten bei moderatem bis hohem Tempo'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht, Langhantel)'],
                            ['Übung' => 'Calf Raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei mittlerer bis hoher Intensität'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '50 Minuten bei hohem Tempo'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '35 Minuten'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Laufen', 'dauer' => '50 Minuten bei hohem Tempo'],
                        ],
                    ],
                ]
            ],

            'muskeln_aufbauen' => [
                'leicht' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Kniebeugen  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Step-Ups ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preachercurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Unterarm-Curls (Handgelenks-Curls)', 'dauer' => '3 Sätze x 15 Wiederholungen'],
                            ['Übung' => 'Reverse Unterarm-Curls', 'dauer' => '3 Sätze x 15 Wiederholungen'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über Kopf)', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Beinpresse', 'dauer' => '4 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Beinstrecker', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Beinbizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Wadenheben (stehend oder sitzend)', 'dauer' => '4 Sätze x 12-15 Wiederholungen'],
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 15-20 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schulterdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Schulterziehen', 'dauer' => '4 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über Kopf mit Seil)', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                ],
                'normal' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Kniebeugen  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Step-Ups ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preachercurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Unterarm-Curls (Handgelenks-Curls)', 'dauer' => '3 Sätze x 15 Wiederholungen'],
                            ['Übung' => 'Reverse Unterarm-Curls', 'dauer' => '3 Sätze x 15 Wiederholungen'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über Kopf)', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Beinpresse', 'dauer' => '4 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Beinstrecker', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Beinbizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Wadenheben (stehend oder sitzend)', 'dauer' => '4 Sätze x 12-15 Wiederholungen'],
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 15-20 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schulterdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Schulterziehen', 'dauer' => '4 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über Kopf mit Seil)', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                ],
                'schwer' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Kniebeugen  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Step-Ups ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preachercurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Unterarm-Curls (Handgelenks-Curls)', 'dauer' => '3 Sätze x 15 Wiederholungen'],
                            ['Übung' => 'Reverse Unterarm-Curls', 'dauer' => '3 Sätze x 15 Wiederholungen'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über Kopf)', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Beinpresse', 'dauer' => '4 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Beinstrecker', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Beinbizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Wadenheben (stehend oder sitzend)', 'dauer' => '4 Sätze x 12-15 Wiederholungen'],
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 15-20 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schulterdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Schulterziehen', 'dauer' => '4 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über Kopf mit Seil)', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                ],
                'sehr schwer' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Kniebeugen  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Step-Ups ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preachercurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Unterarm-Curls (Handgelenks-Curls)', 'dauer' => '3 Sätze x 15 Wiederholungen'],
                            ['Übung' => 'Reverse Unterarm-Curls', 'dauer' => '3 Sätze x 15 Wiederholungen'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über Kopf)', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Beinpresse', 'dauer' => '4 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Beinstrecker', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Beinbizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Wadenheben (stehend oder sitzend)', 'dauer' => '4 Sätze x 12-15 Wiederholungen'],
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 15-20 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schulterdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Schulterziehen', 'dauer' => '4 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über Kopf mit Seil)', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                ],
            ],
        ],
        '21-30' => [
            'abnehmen' => [
                'leicht' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Radfahren', 'dauer' => '60 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ]
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'HIIT', 'dauer' => '30 Minuten'],
                        ]
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '30 Minuten'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Walking', 'dauer' => '20 Minuten'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Walking', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Radfahren', 'dauer' => '20 Minuten'],
                        ],
                    ],
                ],
                'normal' => [
                    // Trainingsplan für "normal" Gewicht und "abnehmen" Ziel
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '60 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '60 Minuten'],
                        ]
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ]
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Walking', 'dauer' => '20 Minuten'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Walking', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Radfahren', 'dauer' => '20 Minuten'],
                        ],
                    ],
                ],
                'schwer' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '60 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '60 Minuten'],
                        ]
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '50 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '50 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '50 Minuten'],
                        ]
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Walking', 'dauer' => '20 Minuten'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Walking', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                    ],
                ],
                'sehr_schwer' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '60 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '60 Minuten'],
                        ]
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '50 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '50 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '50 Minuten'],
                        ]
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Walking', 'dauer' => '20 Minuten'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Walking', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Radfahren', 'dauer' => '20 Minuten'],
                        ],
                    ],
                ],

            ],
            'gewicht_halten' => [
                'leicht' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ]
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ]
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '30min'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '30min'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Laufen', 'dauer' => '30min'],
                        ],
                    ],
                ],
                'normal' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ]
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ]
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '30min'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '30min'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Laufen', 'dauer' => '30min'],
                        ],
                    ],
                ],
                'schwer' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '35-40 Minuten bei mittlerer Intensität'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 10-12 Wiederholungen (ggf. mit Zusatzgewicht oder Unterstützung)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)'],
                            ['Übung' => 'Laufen', 'dauer' => '35-40 Minuten bei moderatem Tempo'],
                        ]
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '45 Minuten bei mittlerer Intensität'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (ggf. mit Zusatzgewicht)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)'],
                            ['Übung' => 'Laufen', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Radfahren', 'dauer' => '35-40 Minuten bei mittlerer Intensität'],
                        ]
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '35 Minuten bei mittlerer Intensität'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '35 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '35 Minuten bei mittlerer Intensität'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)'],
                            ['Übung' => 'Laufen', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '30 Minuten'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Laufen', 'dauer' => '40 Minuten'],
                        ],
                    ],
                ],
                'sehr schwer' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen (ggf. mit Zusatzgewicht)'],
                            ['Übung' => 'Radfahren', 'dauer' => '45 Minuten bei mittlerer Intensität'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 10-12 Wiederholungen (ggf. mit Zusatzgewicht oder Unterstützung)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)'],
                            ['Übung' => 'Laufen', 'dauer' => '45 Minuten bei moderatem Tempo'],
                        ]
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen (ggf. mit Zusatzgewicht)'],
                            ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei mittlerer Intensität'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (ggf. mit Zusatzgewicht)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)'],
                            ['Übung' => 'Laufen', 'dauer' => '50 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit zusätzlichem Gewicht, z.B. Langhantel)'],
                            ['Übung' => 'Radfahren', 'dauer' => '45 Minuten bei hoher Intensität'],
                        ]
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Radfahren', 'dauer' => '45 Minuten bei mittlerer bis hoher Intensität'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)'],
                            ['Übung' => 'Laufen', 'dauer' => '50 Minuten bei moderatem Tempo'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht, Langhantel)'],
                            ['Übung' => 'Calf Raises', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei mittlerer Intensität'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '40-45 Minuten bei mäßigem Tempo'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei mittlerer bis hoher Intensität'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)'],
                            ['Übung' => 'Laufen', 'dauer' => '50 Minuten bei mittlerem bis hohem Tempo'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit zusätzlichem Gewicht, Langhantel)'],
                            ['Übung' => 'Calf Raises', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei hoher Intensität'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '45-50 Minuten bei hohem Tempo'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '35-40 Minuten'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei mittlerer bis hoher Intensität'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '50 Minuten bei moderatem bis hohem Tempo'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht, Langhantel)'],
                            ['Übung' => 'Calf Raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei mittlerer bis hoher Intensität'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '50 Minuten bei hohem Tempo'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '35 Minuten'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Laufen', 'dauer' => '50 Minuten bei hohem Tempo'],
                        ],
                    ],
                ],
            ],
            'muskeln_aufbauen' => [
                'leicht' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Kniebeugen  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Step-Ups ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preachercurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Unterarm-Curls (Handgelenks-Curls)', 'dauer' => '3 Sätze x 15 Wiederholungen'],
                            ['Übung' => 'Reverse Unterarm-Curls', 'dauer' => '3 Sätze x 15 Wiederholungen'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über Kopf)', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Beinpresse', 'dauer' => '4 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Beinstrecker', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Beinbizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Wadenheben (stehend oder sitzend)', 'dauer' => '4 Sätze x 12-15 Wiederholungen'],
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 15-20 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schulterdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Schulterziehen', 'dauer' => '4 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über Kopf mit Seil)', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                ],
                'normal' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Kniebeugen  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Step-Ups ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preachercurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Unterarm-Curls (Handgelenks-Curls)', 'dauer' => '3 Sätze x 15 Wiederholungen'],
                            ['Übung' => 'Reverse Unterarm-Curls', 'dauer' => '3 Sätze x 15 Wiederholungen'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über Kopf)', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Beinpresse', 'dauer' => '4 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Beinstrecker', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Beinbizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Wadenheben (stehend oder sitzend)', 'dauer' => '4 Sätze x 12-15 Wiederholungen'],
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 15-20 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schulterdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Schulterziehen', 'dauer' => '4 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über Kopf mit Seil)', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                ],
                'schwer' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Kniebeugen  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Step-Ups ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preachercurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Unterarm-Curls (Handgelenks-Curls)', 'dauer' => '3 Sätze x 15 Wiederholungen'],
                            ['Übung' => 'Reverse Unterarm-Curls', 'dauer' => '3 Sätze x 15 Wiederholungen'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über Kopf)', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Beinpresse', 'dauer' => '4 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Beinstrecker', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Beinbizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Wadenheben (stehend oder sitzend)', 'dauer' => '4 Sätze x 12-15 Wiederholungen'],
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 15-20 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schulterdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Schulterziehen', 'dauer' => '4 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über Kopf mit Seil)', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                ],
                'sehr schwer' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Kniebeugen  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Step-Ups ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preachercurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Unterarm-Curls (Handgelenks-Curls)', 'dauer' => '3 Sätze x 15 Wiederholungen'],
                            ['Übung' => 'Reverse Unterarm-Curls', 'dauer' => '3 Sätze x 15 Wiederholungen'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über Kopf)', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Beinpresse', 'dauer' => '4 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Beinstrecker', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Beinbizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Wadenheben (stehend oder sitzend)', 'dauer' => '4 Sätze x 12-15 Wiederholungen'],
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 15-20 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schulterdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Schulterziehen', 'dauer' => '4 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über Kopf mit Seil)', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                ],
            ],
        ],
        '31-40' => [
            'abnehmen' => [
                'leicht' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Radfahren', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Laufen', 'dauer' => '45 Minuten'],
                        ]
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ]
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '30 Minuten'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Walking', 'dauer' => '20 Minuten'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Walking', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Radfahren', 'dauer' => '20 Minuten'],
                        ],
                    ],
                ],
                'normal' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '60 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '60 Minuten'],
                        ]
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ]
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Walking', 'dauer' => '20 Minuten'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Walking', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Radfahren', 'dauer' => '20 Minuten'],
                        ],
                    ],
                ],
                'schwer' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '60 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '60 Minuten'],
                        ]
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '50 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '50 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '50 Minuten'],
                        ]
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Walking', 'dauer' => '20 Minuten'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Walking', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                    ],
                ],
                'sehr_schwer' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '60 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '60 Minuten'],
                        ]
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '50 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '50 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '50 Minuten'],
                        ]
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Walking', 'dauer' => '20 Minuten'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Walking', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Radfahren', 'dauer' => '20 Minuten'],
                        ],
                    ],
                ],
            ],
            'gewicht_halten' => [
                'leicht' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ]
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ]
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '30min'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '30min'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Laufen', 'dauer' => '30min'],
                        ],
                    ],
                ],
                'normal' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ]
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ]
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '30min'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '30min'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Laufen', 'dauer' => '30min'],
                        ],
                    ],
                ],
                'schwer' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '35-40 Minuten bei mittlerer Intensität'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 10-12 Wiederholungen (ggf. mit Zusatzgewicht oder Unterstützung)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)'],
                            ['Übung' => 'Laufen', 'dauer' => '35-40 Minuten bei moderatem Tempo'],
                        ]
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '45 Minuten bei mittlerer Intensität'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (ggf. mit Zusatzgewicht)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)'],
                            ['Übung' => 'Laufen', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Radfahren', 'dauer' => '35-40 Minuten bei mittlerer Intensität'],
                        ]
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '35 Minuten bei mittlerer Intensität'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '35 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '35 Minuten bei mittlerer Intensität'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)'],
                            ['Übung' => 'Laufen', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '30 Minuten'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Laufen', 'dauer' => '40 Minuten'],
                        ],
                    ],
                ],
                'sehr schwer' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen (ggf. mit Zusatzgewicht)'],
                            ['Übung' => 'Radfahren', 'dauer' => '45 Minuten bei mittlerer Intensität'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 10-12 Wiederholungen (ggf. mit Zusatzgewicht oder Unterstützung)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)'],
                            ['Übung' => 'Laufen', 'dauer' => '45 Minuten bei moderatem Tempo'],
                        ]
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen (ggf. mit Zusatzgewicht)'],
                            ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei mittlerer Intensität'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (ggf. mit Zusatzgewicht)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)'],
                            ['Übung' => 'Laufen', 'dauer' => '50 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit zusätzlichem Gewicht, z.B. Langhantel)'],
                            ['Übung' => 'Radfahren', 'dauer' => '45 Minuten bei hoher Intensität'],
                        ]
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Radfahren', 'dauer' => '45 Minuten bei mittlerer bis hoher Intensität'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)'],
                            ['Übung' => 'Laufen', 'dauer' => '50 Minuten bei moderatem Tempo'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht, Langhantel)'],
                            ['Übung' => 'Calf Raises', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei mittlerer Intensität'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '40-45 Minuten bei mäßigem Tempo'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei mittlerer bis hoher Intensität'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)'],
                            ['Übung' => 'Laufen', 'dauer' => '50 Minuten bei mittlerem bis hohem Tempo'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit zusätzlichem Gewicht, Langhantel)'],
                            ['Übung' => 'Calf Raises', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei hoher Intensität'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '45-50 Minuten bei hohem Tempo'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '35-40 Minuten'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei mittlerer bis hoher Intensität'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '50 Minuten bei moderatem bis hohem Tempo'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht, Langhantel)'],
                            ['Übung' => 'Calf Raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei mittlerer bis hoher Intensität'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '50 Minuten bei hohem Tempo'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '35 Minuten'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Laufen', 'dauer' => '50 Minuten bei hohem Tempo'],
                        ],
                    ],
                ],
            ],
            'muskeln_aufbauen' => [
                'leicht' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Kniebeugen  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Step-Ups ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preachercurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Unterarm-Curls (Handgelenks-Curls)', 'dauer' => '3 Sätze x 15 Wiederholungen'],
                            ['Übung' => 'Reverse Unterarm-Curls', 'dauer' => '3 Sätze x 15 Wiederholungen'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über Kopf)', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Beinpresse', 'dauer' => '4 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Beinstrecker', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Beinbizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Wadenheben (stehend oder sitzend)', 'dauer' => '4 Sätze x 12-15 Wiederholungen'],
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 15-20 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schulterdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Schulterziehen', 'dauer' => '4 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über Kopf mit Seil)', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                ],
                'normal' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Kniebeugen  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Step-Ups ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preachercurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Unterarm-Curls (Handgelenks-Curls)', 'dauer' => '3 Sätze x 15 Wiederholungen'],
                            ['Übung' => 'Reverse Unterarm-Curls', 'dauer' => '3 Sätze x 15 Wiederholungen'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über Kopf)', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Beinpresse', 'dauer' => '4 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Beinstrecker', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Beinbizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Wadenheben (stehend oder sitzend)', 'dauer' => '4 Sätze x 12-15 Wiederholungen'],
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 15-20 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schulterdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Schulterziehen', 'dauer' => '4 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über Kopf mit Seil)', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                ],
                'schwer' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Kniebeugen  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Step-Ups ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preachercurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Unterarm-Curls (Handgelenks-Curls)', 'dauer' => '3 Sätze x 15 Wiederholungen'],
                            ['Übung' => 'Reverse Unterarm-Curls', 'dauer' => '3 Sätze x 15 Wiederholungen'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über Kopf)', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Beinpresse', 'dauer' => '4 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Beinstrecker', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Beinbizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Wadenheben (stehend oder sitzend)', 'dauer' => '4 Sätze x 12-15 Wiederholungen'],
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 15-20 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schulterdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Schulterziehen', 'dauer' => '4 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über Kopf mit Seil)', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                ],
                'sehr schwer' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Kniebeugen  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Step-Ups ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preachercurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Unterarm-Curls (Handgelenks-Curls)', 'dauer' => '3 Sätze x 15 Wiederholungen'],
                            ['Übung' => 'Reverse Unterarm-Curls', 'dauer' => '3 Sätze x 15 Wiederholungen'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über Kopf)', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Beinpresse', 'dauer' => '4 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Beinstrecker', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Beinbizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Wadenheben (stehend oder sitzend)', 'dauer' => '4 Sätze x 12-15 Wiederholungen'],
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 15-20 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schulterdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Schulterziehen', 'dauer' => '4 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über Kopf mit Seil)', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                ],
            ],
        ],
        '41+' => [
            'abnehmen' => [
                'leicht' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Radfahren', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Laufen', 'dauer' => '45 Minuten'],
                        ]
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ]
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '30 Minuten'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Walking', 'dauer' => '20 Minuten'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Walking', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Radfahren', 'dauer' => '20 Minuten'],
                        ],
                    ],
                ],
                'normal' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '60 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '60 Minuten'],
                        ]
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ]
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Walking', 'dauer' => '20 Minuten'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Walking', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Radfahren', 'dauer' => '20 Minuten'],
                        ],
                    ],
                ],
                'schwer' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '60 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '60 Minuten'],
                        ]
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '50 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '50 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '50 Minuten'],
                        ]
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Walking', 'dauer' => '20 Minuten'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Walking', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                    ],
                ],
                'sehr_schwer' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '60 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '60 Minuten'],
                        ]
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '50 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '50 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '50 Minuten'],
                        ]
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Walking', 'dauer' => '20 Minuten'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Laufen', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Radfahren', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Laufen', 'dauer' => '25 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Walking', 'dauer' => '20 Minuten'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Radfahren', 'dauer' => '20 Minuten'],
                        ],
                    ],
                ],
            ],
            'gewicht_halten' => [
                'leicht' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ]
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ]
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '30min'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '30min'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Laufen', 'dauer' => '30min'],
                        ],
                    ],
                ],
                'normal' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ]
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ]
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '30min'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizepcurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '30min'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Laufen', 'dauer' => '30min'],
                        ],
                    ],
                ],
                'schwer' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '35-40 Minuten bei mittlerer Intensität'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 10-12 Wiederholungen (ggf. mit Zusatzgewicht oder Unterstützung)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)'],
                            ['Übung' => 'Laufen', 'dauer' => '35-40 Minuten bei moderatem Tempo'],
                        ]
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '45 Minuten bei mittlerer Intensität'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (ggf. mit Zusatzgewicht)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)'],
                            ['Übung' => 'Laufen', 'dauer' => '45 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Radfahren', 'dauer' => '35-40 Minuten bei mittlerer Intensität'],
                        ]
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '35 Minuten bei mittlerer Intensität'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '35 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '35 Minuten bei mittlerer Intensität'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '30 Minuten'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)'],
                            ['Übung' => 'Laufen', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '30 Minuten'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Calf raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '40 Minuten'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '30 Minuten'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Laufen', 'dauer' => '40 Minuten'],
                        ],
                    ],
                ],
                'sehr schwer' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen (ggf. mit Zusatzgewicht)'],
                            ['Übung' => 'Radfahren', 'dauer' => '45 Minuten bei mittlerer Intensität'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 10-12 Wiederholungen (ggf. mit Zusatzgewicht oder Unterstützung)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)'],
                            ['Übung' => 'Laufen', 'dauer' => '45 Minuten bei moderatem Tempo'],
                        ]
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen (ggf. mit Zusatzgewicht)'],
                            ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei mittlerer Intensität'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (ggf. mit Zusatzgewicht)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)'],
                            ['Übung' => 'Laufen', 'dauer' => '50 Minuten'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit zusätzlichem Gewicht, z.B. Langhantel)'],
                            ['Übung' => 'Radfahren', 'dauer' => '45 Minuten bei hoher Intensität'],
                        ]
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Radfahren', 'dauer' => '45 Minuten bei mittlerer bis hoher Intensität'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)'],
                            ['Übung' => 'Laufen', 'dauer' => '50 Minuten bei moderatem Tempo'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht, Langhantel)'],
                            ['Übung' => 'Calf Raises', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei mittlerer Intensität'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '40-45 Minuten bei mäßigem Tempo'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei mittlerer bis hoher Intensität'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen (mit mehr Gewicht)'],
                            ['Übung' => 'Laufen', 'dauer' => '50 Minuten bei mittlerem bis hohem Tempo'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit zusätzlichem Gewicht, Langhantel)'],
                            ['Übung' => 'Calf Raises', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei hoher Intensität'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '45-50 Minuten bei hohem Tempo'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '35-40 Minuten'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Liegestütze', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht oder Knien)'],
                            ['Übung' => 'Dips', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei mittlerer bis hoher Intensität'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht)'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '50 Minuten bei moderatem bis hohem Tempo'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '3 Sätze x 12 Wiederholungen (mit Zusatzgewicht, Langhantel)'],
                            ['Übung' => 'Calf Raises', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Radfahren', 'dauer' => '50 Minuten bei mittlerer bis hoher Intensität'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Laufen', 'dauer' => '50 Minuten bei hohem Tempo'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Schwimmen', 'dauer' => '35 Minuten'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Laufen', 'dauer' => '50 Minuten bei hohem Tempo'],
                        ],
                    ],
                ],
            ],
            'muskeln_aufbauen' => [
                'leicht' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Kniebeugen  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Step-Ups ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preachercurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Unterarm-Curls (Handgelenks-Curls)', 'dauer' => '3 Sätze x 15 Wiederholungen'],
                            ['Übung' => 'Reverse Unterarm-Curls', 'dauer' => '3 Sätze x 15 Wiederholungen'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über Kopf)', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Beinpresse', 'dauer' => '4 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Beinstrecker', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Beinbizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Wadenheben (stehend oder sitzend)', 'dauer' => '4 Sätze x 12-15 Wiederholungen'],
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 15-20 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schulterdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Schulterziehen', 'dauer' => '4 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über Kopf mit Seil)', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                ],
                'normal' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Kniebeugen  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Step-Ups ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preachercurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Unterarm-Curls (Handgelenks-Curls)', 'dauer' => '3 Sätze x 15 Wiederholungen'],
                            ['Übung' => 'Reverse Unterarm-Curls', 'dauer' => '3 Sätze x 15 Wiederholungen'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über Kopf)', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Beinpresse', 'dauer' => '4 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Beinstrecker', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Beinbizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Wadenheben (stehend oder sitzend)', 'dauer' => '4 Sätze x 12-15 Wiederholungen'],
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 15-20 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schulterdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Schulterziehen', 'dauer' => '4 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über Kopf mit Seil)', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                ],
                'schwer' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Kniebeugen  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Step-Ups ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preachercurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Unterarm-Curls (Handgelenks-Curls)', 'dauer' => '3 Sätze x 15 Wiederholungen'],
                            ['Übung' => 'Reverse Unterarm-Curls', 'dauer' => '3 Sätze x 15 Wiederholungen'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über Kopf)', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Beinpresse', 'dauer' => '4 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Beinstrecker', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Beinbizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Wadenheben (stehend oder sitzend)', 'dauer' => '4 Sätze x 12-15 Wiederholungen'],
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 15-20 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schulterdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Schulterziehen', 'dauer' => '4 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über Kopf mit Seil)', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                ],
                'sehr schwer' => [
                    2 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Dips ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Kniebeugen  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Step-Ups ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                    3 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
                    4 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preachercurls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Unterarm-Curls (Handgelenks-Curls)', 'dauer' => '3 Sätze x 15 Wiederholungen'],
                            ['Übung' => 'Reverse Unterarm-Curls', 'dauer' => '3 Sätze x 15 Wiederholungen'],
                        ],
                    ],
                    5 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken', 'dauer' => '3 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über Kopf)', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Kniebeugen', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Beinpresse', 'dauer' => '4 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Beinstrecker', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Beinbizeps-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Wadenheben (stehend oder sitzend)', 'dauer' => '4 Sätze x 12-15 Wiederholungen'],
                            ['Übung' => 'Crunches', 'dauer' => '3 Sätze x 15-20 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Schulterdrücken', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Schulterziehen', 'dauer' => '4 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '4 Sätze x 8-12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über Kopf mit Seil)', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                            ['Übung' => 'Overhead Trizeps Extension', 'dauer' => '3 Sätze x 10-12 Wiederholungen'],
                        ],
                    ],
                    6 => [
                        'Tag 1' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 2' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 3' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 4' => [
                            ['Übung' => 'Bankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schrägbankdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Fliegende Bewegungen', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Schulterdrücken ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Seitheben', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken (über dem Kopf)', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Trizepsdrücken', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 5' => [
                            ['Übung' => 'Klimmzüge ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Rudern', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Reverse Flies', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Preacher-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Bizeps-Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hammer Curls', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                        'Tag 6' => [
                            ['Übung' => 'Beinpresse ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Kreuzheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Hip Thrusts ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Wadenheben  ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                            ['Übung' => 'Crunches ', 'dauer' => '3 Sätze x 12 Wiederholungen'],
                        ],
                    ],
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
    } else {
        $goalName = 'muskeln_aufbauen';
    }

/*
    var_dump($ageGroup);
    var_dump($goalName);
    var_dump($weightCategory);
    var_dump($days);
*/
    // Trainingsplan zurückgeben
    return $plans[$ageGroup][$goalName][$weightCategory][$days] ?? null;
}
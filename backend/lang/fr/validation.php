<?php

return [
    'required' => 'Le champ :attribute est obligatoire.',
    'string' => 'Le champ :attribute doit etre une chaine de caracteres.',
    'email' => 'Le champ :attribute doit etre une adresse email valide.',
    'min' => [
        'string' => 'Le champ :attribute doit contenir au moins :min caracteres.',
    ],
    'max' => [
        'string' => 'Le champ :attribute ne peut pas contenir plus de :max caracteres.',
    ],

    'attributes' => [
        'name' => 'nom',
        'email' => 'email',
        'message' => 'message',
    ],
];

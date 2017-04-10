<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | following language lines contain default error messages used by
    | validator class. Some of these rules have multiple versions such
    | as size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute muss akzeptiert werden.',
    'active_url'           => ':attribute ist keine valide URL.',
    'after'                => ':attribute muss ein Datum nach :date sein.',
    'alpha'                => ':attribute kann nur Buchstaben enthalten.',
    'alpha_dash'           => ':attribute kann nur Buchstaben, Zahlen und Bindestriche enthalten.',
    'alpha_num'            => ':attribute kann nur Buchstaben und Zahlen enthalten.',
    'array'                => ':attribute muss eine Array sein.',
    'before'               => ':attribute muss ein Datum vor :date sein.',
    'between'              => [
        'numeric' => ':attribute muss zwischen :min und :max liegen.',
        'file'    => ':attribute muss zwischen :min und :max Kilobytes gro&szlig; sein.',
        'string'  => ':attribute muss zwischen :min und :max Zeichen lang sein.',
        'array'   => ':attribute muss zwischen :min und :max Elemente enthalten.',
    ],
    'boolean'              => ':attribute Feld muss wahr oder falsch sein.',
    'confirmed'            => ':attribute Best&auml;tigung stimmt nicht &uuml;berein.',
    'date'                 => ':attribute ist kein valides Datum.',
    'date_format'          => ':attribute entspricht nicht dem Format :format.',
    'different'            => ':attribute und :other m&uuml;ssen unterschiedlich sein.',
    'digits'               => ':attribute muss :digits Stellen haben.',
    'digits_between'       => ':attribute muss zwischen :min und :max Stellen haben.',
    'email'                => ':attribute muss eine valide E-Mail Adresse sein.',
    'filled'               => ':attribute Feld ist erforderlich.',
    'exists'               => 'Markiertes :attribute ist ung&uuml;ltig.',
    'image'                => ':attribute muss ein Bild sein.',
    'in'                   => 'Markiertes :attribute ist ung&uuml;ltig.',
    'integer'              => ':attribute muss eine Zahl sein.',
    'ip'                   => ':attribute muss eine valide IP-Adresse sein.',
    'max'                  => [
        'numeric' => ':attribute darf nicht gr&ouml;&szlig;er als :max sein.',
        'file'    => ':attribute darf nicht gr&ouml;&szlig;er als :max Kilobyte sein.',
        'string'  => ':attribute darf nicht l&auml;nger als :max Zeichen sein.',
        'array'   => ':attribute darf nicht mehr als :max Elemente enthalten.',
    ],
    'mimes'                => ':attribute muss eine Datei vom Typ: :values sein.',
    'min'                  => [
        'numeric' => ':attribute muss mindestens :min. sein',
        'file'    => ':attribute muss mindestens :min Kilobyte gro&szlig; sein.',
        'string'  => ':attribute muss mindestens :min Zeichen lang sein.',
        'array'   => ':attribute muss mindesten :min Elemente enthalten.',
    ],
    'not_in'               => 'Markiertes :attribute ist ung&uuml;ltig.',
    'numeric'              => ':attribute muss eine Zahl sein.',
    'regex'                => ':attribute Format ist ung&uuml;ltig.',
    'required'             => ':attribute Feld ist erforderlich.',
    'required_if'          => ':attribute Feld ist erforderlich, wenn :other :value ist.',
    'required_with'        => ':attribute Feld ist erforderlich, wenn :values vorhanden ist.',
    'required_with_all'    => ':attribute Feld ist erforderlich, wenn :values vorhanden sind.',
    'required_without'     => ':attribute Feld ist erforderlich, wenn :values nicht vorhanden ist.',
    'required_without_all' => ':attribute Feld ist erforderlich, wenn :values nicht vorhanden sind.',
    'same'                 => ':attribute und :other muss &uuml;bereinstimmen.',
    'size'                 => [
        'numeric' => ':attribute muss :size sein.',
        'file'    => ':attribute muss :size Kilobytes gro&szlig; sein.',
        'string'  => ':attribute muss :size Zeichen lang sein.',
        'array'   => ':attribute muss :size Elemente enthalten.',
    ],
    'string'               => ':attribute muss eine Zeichenkette sein.',
    'timezone'             => ':attribute muss eine valide zeitzone sein.',
    'unique'               => ':attribute wird bereits verwendet.',
    'url'                  => ':attribute ist kein valides Format.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];

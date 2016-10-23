<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'El :attribute debe ser aceptado.',
    'active_url'           => 'El :attribute no es una URL válida.',
    'after'                => 'El :attribute debe ser una fecha posterior a :date.',
    'alpha'                => 'El :attribute solo debe contener letras.',
    'alpha_dash'           => 'El :attribute solo debe contener letras, números, y guiones.',
    'alpha_num'            => 'El :attribute solo debe contener letras y números.',
    'array'                => 'El :attribute debe ser un arreglo.',
    'before'               => 'El :attribute debe ser una fecha anterior a :date.',
    'between'              => [
        'numeric' => 'El :attribute debe estar entre :min y :max.',
        'file'    => 'El :attribute debe estar entre :min y :max kilobytes.',
        'string'  => 'El :attribute debe estar entre :min y :max caracteres.',
        'array'   => 'El :attribute debe tener entre :min y :max items.',
    ],
    'boolean'              => 'El campo :attribute debe tener un valor verdadero o falso.',
    'confirmed'            => 'La confirmación de :attribute no coincide.',
    'date'                 => ':attribute no es una fecha válida.',
    'date_format'          => ':attribute no corresponde al formato :format.',
    'different'            => ':attribute y :other deben ser diferentes.',
    'digits'               => ':attribute debe tener :digits dígitos.',
    'digits_between'       => ':attribute debe tener entre :min y :max dígitos.',
    'dimensions'           => ':attribute tiene dimensiones inválidas.',
    'distinct'             => 'El campo :attribute tiene un valor duplicado.',
    'email'                => 'El :attribute debe ser una dirección de correo válida.',
    'exists'               => 'El :attribute seleccionado es inválido.',
    'file'                 => 'El :attribute debe ser un archivo.',
    'filled'               => 'El campo :attribute es obligatorio.',
    'image'                => 'El :attribute debe ser una imagen.',
    'in'                   => 'El :attribute seleccionado es inválido.',
    'in_array'             => 'El campo :attribute no existe en :other.',
    'integer'              => 'El :attribute debe ser un número.',
    'ip'                   => 'El :attribute debe ser una dirección IP válida.',
    'json'                 => 'El :attribute debe ser un JSON válido.',
    'max'                  => [
        'numeric' => 'El :attribute no puede ser mayor que :max.',
        'file'    => 'El :attribute no puede ser mayor que :max kilobytes.',
        'string'  => 'El :attribute no puede ser mayor que :max caracteres.',
        'array'   => 'El :attribute no puede tener más de :max items.',
    ],
    'mimes'                => 'El :attribute debe ser un archivo de type: :values.',
    'mimetypes'            => 'El :attribute debe ser un archivo de type: :values.',
    'min'                  => [
        'numeric' => 'El :attribute al menos debe tener :min.',
        'file'    => 'El :attribute al menos debe tener :min kilobytes.',
        'string'  => 'El :attribute al menos debe tener :min caracteres.',
        'array'   => 'El :attribute al menos debe tener :min items.',
    ],
    'not_in'               => 'El :attribute seleccionado es inválido.',
    'numeric'              => 'El :attribute debe ser numérico.',
    'present'              => 'El campo :attribute debe estar presente.',
    'regex'                => 'El :attribute formato es inválido.',
    'required'             => 'El campo :attribute es obligatorio.',
    'required_if'          => 'El campo :attribute es obligatorio cuando :other es :value.',
    'required_unless'      => 'El campo :attribute es obligatorio a no ser que :other está en :values.',
    'required_with'        => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_with_all'    => 'El campo :attribute es obligatorio cuando :values están presentes.',
    'required_without'     => 'El campo :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ninguno de :values están presentes.',
    'same'                 => 'El campo :attribute y :other deben empatar.',
    'size'                 => [
        'numeric' => 'El :attribute deben tener :size.',
        'file'    => 'El :attribute deben tener :size kilobytes.',
        'string'  => 'El :attribute deben tener :size caracteres.',
        'array'   => 'El :attribute deben contener :size items.',
    ],
    'string'               => 'El :attribute debe ser una cadena de texto.',
    'timezone'             => 'El :attribute debe ser una zona válida.',
    'unique'               => 'El :attribute ya se ha tomado.',
    'uploaded'             => 'El :attribute falló al subir.',
    'url'                  => 'El formato de :attribute es inválido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];

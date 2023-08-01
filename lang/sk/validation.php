<?php

declare(strict_types=1);

return [
    'accepted'             => ':Attribute musí byť akceptovaný.',
    'accepted_if'          => ':Attribute musí byť akceptované ak :other je :value.',
    'active_url'           => ':Attribute má neplatnú URL adresu.',
    'after'                => ':Attribute musí byť dátum po :date.',
    'after_or_equal'       => ':Attribute musí byť dátum po alebo presne :date.',
    'alpha'                => ':Attribute môže obsahovať len písmená.',
    'alpha_dash'           => ':Attribute môže obsahovať len písmená, čísla a pomlčky.',
    'alpha_num'            => ':Attribute môže obsahovať len písmená, čísla.',
    'array'                => ':Attribute musí byť pole.',
    'ascii'                => 'Číslo :attribute musí obsahovať iba jednobajtové alfanumerické znaky a symboly.',
    'before'               => ':Attribute musí byť dátum pred :date.',
    'before_or_equal'      => ':Attribute musí byť dátum pred alebo presne :date.',
    'between'              => [
        'array'   => ':Attribute musí mať rozsah :min - :max prvkov.',
        'file'    => ':Attribute musí mať rozsah :min - :max kilobajtov.',
        'numeric' => ':Attribute musí mať rozsah :min - :max.',
        'string'  => ':Attribute musí mať rozsah :min - :max znakov.',
    ],
    'boolean'              => ':Attribute musí byť pravda alebo nepravda.',
    'can'                  => 'Pole :attribute obsahuje neoprávnenú hodnotu.',
    'confirmed'            => ':Attribute konfirmácia sa nezhoduje.',
    'current_password'     => 'Heslo je nesprávne.',
    'date'                 => ':Attribute má neplatný dátum.',
    'date_equals'          => ':Attribute musí byť dátum rovnajúci sa :date.',
    'date_format'          => ':Attribute sa nezhoduje s formátom :format.',
    'decimal'              => ':Attribute musí mať :decimal desatinných miest.',
    'declined'             => ':Attribute musí byť zamietnuté.',
    'declined_if'          => ':Attribute musí byť zamietnuté ak :other je :value.',
    'different'            => ':Attribute a :other musia byť odlišné.',
    'digits'               => ':Attribute musí mať :digits číslic.',
    'digits_between'       => ':Attribute musí mať rozsah :min až :max číslic.',
    'dimensions'           => ':Attribute má neplatné rozmery obrázku.',
    'distinct'             => ':Attribute je duplicitný.',
    'doesnt_end_with'      => ':Attribute nemusí končiť jedným z nasledujúcich: :values.',
    'doesnt_start_with'    => 'Číslo :attribute nemusí začínať jednou z nasledujúcich možností: :values.',
    'email'                => ':Attribute má neplatný formát.',
    'ends_with'            => ':Attribute musí obsahovať jednú z týchto hodnôt: :values.',
    'enum'                 => 'Vybraná hodnota :attribute je neplatná.',
    'exists'               => 'označený :attribute je neplatný.',
    'file'                 => ':Attribute musí byť súbor.',
    'filled'               => ':Attribute je požadované.',
    'gt'                   => [
        'array'   => ':Attribute musí mať viac prvkov ako :value.',
        'file'    => ':Attribute musí mať viac kilobajtov ako :value.',
        'numeric' => 'Hodnota :attribute musí byť väčšia ako :value.',
        'string'  => ':Attribute musí mať viac znakov ako :value.',
    ],
    'gte'                  => [
        'array'   => ':Attribute musí mať rovnaký alebo väčší počet prvkov ako :value.',
        'file'    => ':Attribute musí mať rovnaký alebo väčší počet kilobajtov ako :value.',
        'numeric' => 'Hodnota :attribute musí byť väčšia alebo rovná ako :value.',
        'string'  => ':Attribute musí mať rovnaký alebo väčší počet znakov ako :value.',
    ],
    'image'                => ':Attribute musí byť obrázok.',
    'in'                   => 'označený :attribute je neplatný.',
    'in_array'             => ':Attribute sa nenachádza v :other.',
    'integer'              => ':Attribute musí byť celé číslo.',
    'ip'                   => ':Attribute musí byť platná IP adresa.',
    'ipv4'                 => ':Attribute musí byť platná IPv4 adresa.',
    'ipv6'                 => ':Attribute musí byť platná IPv6 adresa.',
    'json'                 => ':Attribute musí byť platný JSON reťazec.',
    'lowercase'            => 'Číslo :attribute musí byť malé.',
    'lt'                   => [
        'array'   => ':Attribute musí mať menej prvkov ako :value.',
        'file'    => ':Attribute musí mať menej kilobajtov ako :value.',
        'numeric' => 'Hodnota :attribute musí byť menšia ako :value.',
        'string'  => ':Attribute musí mať menej znakov ako :value.',
    ],
    'lte'                  => [
        'array'   => ':Attribute musí mať rovnaký alebo menší počet prvkov ako :value.',
        'file'    => ':Attribute musí mať rovnaký alebo menší počet kilobajtov ako :value.',
        'numeric' => 'Hodnota :attribute musí byť menšia alebo rovná ako :value.',
        'string'  => ':Attribute musí mať rovnaký alebo menší počet znakov ako :value.',
    ],
    'mac_address'          => ':Attribute musí byť platná adresa MAC.',
    'max'                  => [
        'array'   => ':Attribute nemôže mať viac ako :max prvkov.',
        'file'    => ':Attribute nemôže byť väčší ako :max kilobajtov.',
        'numeric' => ':Attribute nemôže byť väčší ako :max.',
        'string'  => ':Attribute nemôže byť väčší ako :max znakov.',
    ],
    'max_digits'           => 'Číslo :attribute nesmie mať viac ako :max číslic.',
    'mimes'                => ':Attribute musí byť súbor s koncovkou: :values.',
    'mimetypes'            => ':Attribute musí byť súbor s koncovkou: :values.',
    'min'                  => [
        'array'   => ':Attribute musí mať aspoň :min prvkov.',
        'file'    => ':Attribute musí mať aspoň :min kilobajtov.',
        'numeric' => ':Attribute musí mať aspoň :min.',
        'string'  => ':Attribute musí mať aspoň :min znakov.',
    ],
    'min_digits'           => 'Číslo :attribute musí mať aspoň :min číslic.',
    'missing'              => 'Pole :attribute musí chýbať.',
    'missing_if'           => 'Ak :other je :value, pole :attribute musí chýbať.',
    'missing_unless'       => 'Pole :attribute musí chýbať, pokiaľ :other nie je :value.',
    'missing_with'         => 'Ak je prítomných :values, pole :attribute musí chýbať.',
    'missing_with_all'     => 'Ak je prítomných :values, pole :attribute musí chýbať.',
    'multiple_of'          => ':Attribute musí byť násobkom :value',
    'not_in'               => 'označený :attribute je neplatný.',
    'not_regex'            => ':Attribute má neplatný formát.',
    'numeric'              => ':Attribute musí byť číslo.',
    'password'             => [
        'letters'       => ':Attribute musí obsahovať aspoň jedno písmeno.',
        'mixed'         => ':Attribute musí obsahovať aspoň jedno veľké a jedno malé písmeno.',
        'numbers'       => ':Attribute musí obsahovať aspoň jedno číslo.',
        'symbols'       => ':Attribute musí obsahovať aspoň jeden symbol.',
        'uncompromised' => 'Daných :attribute sa objavilo pri úniku údajov. Vyberte si prosím iných :attribute.',
    ],
    'present'              => ':Attribute musí byť odoslaný.',
    'prohibited'           => ':Attribute je zakázané.',
    'prohibited_if'        => ':Attribute je zakázané, keď je :other :value.',
    'prohibited_unless'    => ':Attribute je zakázané, pokiaľ :other nie je v :values.',
    'prohibits'            => ':Attribute zakazuje, aby bolo :other povolené.',
    'regex'                => ':Attribute má neplatný formát.',
    'required'             => ':Attribute je požadované.',
    'required_array_keys'  => 'Pole :attribute musí obsahovať položky pre: :values.',
    'required_if'          => ':Attribute je požadované keď :other je :value.',
    'required_if_accepted' => 'Pole :attribute je povinné, keď sa prijme :other.',
    'required_unless'      => ':Attribute je požadované, okrem prípadu keď :other je v :values.',
    'required_with'        => ':Attribute je požadované keď :values je prítomné.',
    'required_with_all'    => ':Attribute je požadované ak :values je nastavené.',
    'required_without'     => ':Attribute je požadované keď :values nie je prítomné.',
    'required_without_all' => ':Attribute je požadované ak žiadne z :values nie je nastavené.',
    'same'                 => ':Attribute a :other sa musia zhodovať.',
    'size'                 => [
        'array'   => ':Attribute musí obsahovať :size prvkov.',
        'file'    => ':Attribute musí mať :size kilobajtov.',
        'numeric' => ':Attribute musí byť :size.',
        'string'  => ':Attribute musí mať :size znakov.',
    ],
    'starts_with'          => ':Attribute musí začínať niektorou z hodnôt: :values',
    'string'               => ':Attribute musí byť reťazec znakov.',
    'timezone'             => ':Attribute musí byť platné časové pásmo.',
    'ulid'                 => ':Attribute musí byť platným ULID.',
    'unique'               => ':Attribute už existuje.',
    'uploaded'             => 'Nepodarilo sa nahrať :attribute.',
    'uppercase'            => 'Číslo :attribute musí byť veľké.',
    'url'                  => ':Attribute musí mať formát URL.',
    'uuid'                 => ':Attribute musí byť platné UUID.',
    'attributes'           => [
        'address'                  => 'adresa',
        'age'                      => 'vek',
        'amount'                   => 'množstvo',
        'area'                     => 'oblasť',
        'available'                => 'dostupne',
        'birthday'                 => 'deň narodenia',
        'body'                     => 'správa',
        'city'                     => 'mesto',
        'content'                  => 'obsah',
        'country'                  => 'krajina',
        'created_at'               => 'vytvorené o',
        'creator'                  => 'tvorca',
        'current_password'         => 'aktuálne heslo',
        'date'                     => 'dátum',
        'date_of_birth'            => 'dátum narodenia',
        'day'                      => 'deň',
        'deleted_at'               => 'vymazané o',
        'description'              => 'popis',
        'district'                 => 'okres',
        'duration'                 => 'trvanie',
        'email'                    => 'e-mailová adresa',
        'excerpt'                  => 'úryvok',
        'filter'                   => 'filter',
        'first_name'               => 'krstné meno',
        'gender'                   => 'pohlavie',
        'group'                    => 'skupina',
        'hour'                     => 'hodina',
        'image'                    => 'obraz',
        'last_name'                => 'priezvisko',
        'lesson'                   => 'lekcia',
        'line_address_1'           => 'adresný riadok 1',
        'line_address_2'           => 'adresný riadok 2',
        'message'                  => 'správa',
        'middle_name'              => 'druhé meno',
        'minute'                   => 'minúta',
        'mobile'                   => 'telefón',
        'month'                    => 'mesiac',
        'name'                     => 'meno',
        'national_code'            => 'národný kód',
        'number'                   => 'číslo',
        'password'                 => 'heslo',
        'password_confirmation'    => 'heslo znovu',
        'phone'                    => 'telefón',
        'photo'                    => 'fotografia',
        'postal_code'              => 'poštové smerovacie číslo',
        'price'                    => 'cena',
        'province'                 => 'provincia',
        'recaptcha_response_field' => 'pole odpovede recaptcha',
        'remember'                 => 'zapamätať si',
        'restored_at'              => 'obnovené o',
        'result_text_under_image'  => 'text výsledku pod obrázkom',
        'role'                     => 'rola',
        'second'                   => 'sekunda',
        'sex'                      => 'pohlavie',
        'short_text'               => 'kratký text',
        'size'                     => 'rozmer',
        'state'                    => 'štát',
        'street'                   => 'ulica',
        'student'                  => 'študent',
        'subject'                  => 'predmet',
        'teacher'                  => 'učiteľ',
        'terms'                    => 'podmienky',
        'test_description'         => 'testový popis',
        'test_locale'              => 'testová lokalizácia',
        'test_name'                => 'testové meno',
        'text'                     => 'text',
        'time'                     => 'čas',
        'title'                    => 'názov',
        'updated_at'               => 'aktualizované o',
        'username'                 => 'používateľské meno',
        'year'                     => 'rok',
    ],
];

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TraductionController extends Controller
{
    public function getTranslations()
{
    // Récupérer les traductions depuis le fichier de langues (par exemple, en.json ou fr.json)
    $translations = trans('messages'); // Assurez-vous que 'messages' correspond au nom du fichier de langue que vous voulez utiliser

    return response()->json([
        'translations' => $translations,
    ]);
}

}

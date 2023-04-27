@extends('layouts.app')

@section('content')
    {{--
        Champs nécéssaires
         - Mot en macusi ✅
         - 6 champs de syllabes avec selection unique par champs ✅
         - champs de texte libre pour la traduction et choix de la langue dans laquelle elle est donnée✅
         - Mise en contexte dans une phrase dans laquelle la traduction a ete donnée
    --}}
    @php
        $locale = strtoupper(app()->getLocale())
    @endphp
    <form method="POST" action="{{ route('dictionary.store', app()->getLocale()) }}">
        @csrf
        <div class="form-row d-flex align-items-baseline w-100">
            <label>Syllabes :</label>
            @for($i = 0; $i < 6; $i++)
                <div class="form-group col-md-1">
                    <select name="syllabe_{{$i}}" class="form-control" onchange="previewMacusi()">
                        <option value="">---</option>
                        @foreach($syllabes as $syllabe)
                            <option value="{{$syllabe->syllabe}}" data-concept='{{!empty(json_decode($syllabe->trads)->$locale) ? json_decode($syllabe->trads)->$locale:'null'}}'>{{$syllabe->syllabe}} - {{json_decode($syllabe->trads)->$locale}}</option>
                        @endforeach
                    </select>
                </div>
            @endfor
        </div>

        <div class="form-row d-flex">
            <div class="form-group col-md-3">
                <label for="enMacusi" class="mx-1">Mot en Macusi : </label>
                <label>
                    <input type="text" name="enMacusi" id="enMacusi" class="form-control-plaintext w-75" readonly  value="---">
                </label>
            </div>
            <div class="form-group col-9">
                <label  for="concept" class="mx-1">Concept : </label>
                <label>
                    <input type="text"  name="concept" class="form-control-plaintext" readonly  value="---">
                </label>
            </div>
        </div>

        <div class="form-row d-flex align-items-baseline">
            <label>Traduction :</label>
            <select name="language" class="form-group form-control col-md-1">
                <option value="GE">Deutsch</option>
                <option value="EN">English</option>
                <option value="FR">Français</option>
                <option value="IT">Italiano</option>
            </select>
            <input type="text" name="traduction" data-max-words="1" class="form-group form-control col-md-2">
        </div>
        <div class="form-row">
            <input type="textarea" name="contextSentence" placeholder="Put {{ $word = 'word' }} in a sentence." class="form-group form-control col-md-6">
        </div>
        <input type="submit" value="Soumettre" class="btn btn-primary">
    </form>
    <script>
        function previewMacusi() {
            //Updates 'enMacusi' field
            let wordsArray = []
            let conceptArray = []

            for(let i = 0; i<6; i++){
                let el = document.getElementsByName('syllabe_'+i)[0]
                wordsArray.push(el.value)
                conceptArray.push(el.options[el.selectedIndex].dataset.concept)
            }

            let macusiPreview = document.getElementById('enMacusi');
            let conceptPreview = document.getElementsByName('concept')[0]

            let macusiStr = ""
            let conceptStr = ""
            for (const syllabe of wordsArray) {
                if(syllabe === null) continue
                macusiStr += syllabe
            }

            for(const concept of conceptArray){
                if(concept === undefined) continue
                conceptStr += concept + ' / '
            }


            macusiPreview.value = macusiStr.length === 0 ? '---' : macusiStr
            conceptPreview.value = conceptStr.length === 0 ? '---' : conceptStr.substring(0, conceptStr.length-2)
        }
    </script>
@endsection
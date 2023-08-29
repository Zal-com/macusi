@extends('layouts.app')

@section('content')
    @php
        $localesArray = ['FR' => 'français', 'EN' => 'English', 'IT' => 'italiano', 'DE' => 'deutsch'];

        $locale = strtoupper(app()->getLocale());

        $localeString = $localesArray[$locale];

    @endphp
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

    <h1 class="h3-title">{{__('Mon compte')}}</h1>
    <div class="parent mt-5 justify-content-between">
        <x-user_sidebar :url="$url"/>
        <div class="right px-5 card border-0 shadow p-3 h-100">
            <h3 class="h3-title mt-2">{{__('Modifier un mot')}}</h3>
            <form method="POST" action="{{ route('user.submission.update', ['lang' => app()->getLocale(), 'id' => Auth::id(), 'id_sug'=>$submission->id_sug]) }}" class="submission_form">
                @csrf
                @method('PUT')
                <div class="d-inline mt-4">
                    <span>Syllabes :</span>
                    <div class="w-100">
                        @for($i = 1; $i <= 6; $i++)
                            <select name="syllabe_{{$i}}" class="form-control" onchange="previewMacusi()">
                                <option value="">---</option>
                                @foreach($syllabes as $syllabe)
                                    <option value="{{$syllabe->syllabe}}" {{$submission->{'mot' . $i . '_sug'} == $syllabe->syllabe ? 'selected' : ''}} data-concept='{{!empty(json_decode($syllabe->trads)->$locale) ? json_decode($syllabe->trads)->$locale:'null'}}'>{{$syllabe->syllabe}} - {{json_decode($syllabe->trads)->$locale}}</option>
                                @endforeach
                            </select>
                        @endfor
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-9">
                        <label for="enMacusi" class="mx-1">Mot en Macusi : </label>
                        <label>
                            <input type="text" name="enMacusi" id="enMacusi" class="form-control-plaintext w-75" readonly  value="---">
                        </label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-12">
                        <label  for="concept" class="mx-1">Concept : </label>
                        <label>
                            <input type="text" id="concept" name="concept" class="form-control-plaintext" readonly  value="---">
                        </label>
                    </div>
                </div>

                <div class="form-row d-flex align-items-baseline">
                    <label>Traduction :</label>
                    <select name="language" class="form-group form-control col-md-1">
                        @foreach(config('custom.available_languages') as $language => $value)
                            <option value="{{$language}}" {{$language == $locale ? 'selected' : ''}}>{{__($value)}}</option>
                        @endforeach
                    </select>
                    <input type="text" name="traduction" data-max-words="1" class="form-group form-control col-md-2" value="{{json_decode($submission->trads_sug)->$locale}}">
                </div>
                <input type="hidden" name="id_sug" value="{{$submission->id_sug}}">
                <input type="submit" value="Soumettre" class="btn btn-primary">
            </form>
        </div>
    </div>

    <script>
        window.onload = function(){
            previewMacusi()
        }

        function previewMacusi() {
            //Updates 'enMacusi' field
            let wordsArray = []
            let conceptArray = []

            for(let i = 1; i<=6; i++){
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

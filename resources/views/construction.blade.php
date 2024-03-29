@extends('layouts.app')
@php
    $locale = strtoupper(app()->getLocale());
@endphp
@section('description', 'Le principe du MaCuSi est de n\'avoir que 85 mots. Avec l\'arrangement de ces 85 mots, il est possible de générer théoriquement plus de 377 milliards de mots différents d’une à six syllabes. L\'idée générale étant de ne pas devoir apprendre autre chose que les 85 mots de base mais de comprendre ou de découvrir les combinaisons possibles et logiques, de repousser les limites du langage pour servir de moyen de communication entre locuteurs de langues différentes.')
@section('content')
    <div class="container construction">
        <h1 class="h3-title">{{__('Construction')}}</h1>

        <!----------
          GRAMMAIRE
        ------------>
        <h3 class="text-center mt-5" style="color: #575757; font-size: 30px; font-weight: 600;">{{__('Grammaire')}}</h3>
        <div class="container d-flex justify-content-center flex-wrap mt-4">
            <button class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="width: 460px !important; border-radius: 8px  !important;" data-bs-toggle="modal" data-bs-target="#declarative">
                <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">{{__('La phrase déclarative')}}</div>
                <div><img src="{{asset('storage/img/icon-arrow-right.svg')}}" height="15" alt="arrow right open modal"></div>
            </button>
            <button class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="width: 460px !important; border-radius: 8px  !important;" data-bs-toggle="modal" data-bs-target="#negative">
                <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">{{__('La phrase négative')}}</div>
                <div><img src="{{asset('storage/img/icon-arrow-right.svg')}}" height="15" alt="arrow right open modal"></div>
            </button>
            <button class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="width: 460px !important; border-radius: 8px  !important;" data-bs-toggle="modal" data-bs-target="#interrogative">
                <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">{{__('La phrase interrogative')}}</div>
                <div><img src="{{asset('storage/img/icon-arrow-right.svg')}}" height="15" alt="arrow right open modal"></div>
            </button>
            <button class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="width: 460px !important; border-radius: 8px  !important;" data-bs-toggle="modal" data-bs-target="#exclamative">
                <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">{{__('La phrase exclamative')}}</div>
                <div><img src="{{asset('storage/img/icon-arrow-right.svg')}}" height="15" alt="arrow right open modal"></div>
            </button>
            <button class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="width: 460px !important; border-radius: 8px  !important;" data-bs-toggle="modal" data-bs-target="#complements">
                <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">{{__('L\'ordre des compléments')}}</div>
                <div><img src="{{asset('storage/img/icon-arrow-right.svg')}}" height="15" alt="arrow right open modal"></div>
            </button>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="declarative" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{__('La phrase déclarative')}}</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="close">
                        <img src="{{asset('storage/img/icon-close.svg')}}" alt="fermer le popup">
                    </button>

                </div>
                <div class="modal-body">
                    <p>{{__('Elle se construit de la manière suivante : le sujet se met en début de phrase suivi par le verbe et ensuite viennent les différents compléments.')}}</p>
                    <p class="demo"><span>{{__('Sujet')}}</span><img src="{{asset('storage/img/icon-plus.svg')}}"><span>{{__('Verbe')}}</span><img src="{{asset('storage/img/icon-plus.svg')}}"><span>{{__('Compléments')}}</span></p>
                    <p class="exemple"><span>{{__('Exemple')}} : </span>{{__('J\'aime les fruits')}}<img src="{{asset('storage/img/icon-arrow-right-left.svg')}}">
                        {{__('Moi Aimer Fruits')}} <img src="{{asset('storage/img/icon-arrow-right-left.svg')}}"> Sa Da JuMo</p>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="negative" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{__('La phrase négative')}}</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="close">
                        <img src="{{asset('storage/img/icon-close.svg')}}" alt="fermer le popup">
                    </button>

                </div>
                <div class="modal-body">
                    <p>{{__('Se construit de la même manière que la phrase déclarative mais avec l’ajout du mot [Ze] derrière le verbe.')}}</p>
                    <p class="demo">
                        <span>{{__('Sujet')}}</span>
                        <img src="{{asset('storage/img/icon-plus.svg')}}">
                        <span>{{__('Verbe')}}</span>
                        <img src="{{asset('storage/img/icon-plus.svg')}}">
                        <span class="ajout">Ze</span>
                        <img src="{{asset('storage/img/icon-plus.svg')}}">
                        <span>{{__('Compléments')}}</span>
                    </p>
                    <p class="exemple">
                        <span>{{__('Exemple')}} : </span>
                        {{__('Je n\'aime pas les fruits')}}
                        <img src="{{asset('storage/img/icon-arrow-right-left.svg')}}">
                        {{__('Moi Aimer Pas Fruits')}}
                        <img src="{{asset('storage/img/icon-arrow-right-left.svg')}}">
                        Sa Da Ze JuMo
                    </p>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="interrogative" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{__('La phrase interrogative')}}</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="close">
                        <img src="{{asset('storage/img/icon-close.svg')}}" alt="fermer le popup">
                    </button>

                </div>
                <div class="modal-body">
                    <p>{{__('Elle se construit de la même manière que la phrase déclarative mais avec l\'ajout du mot [Wa] où l\'on veut dans la phrase.')}}</p>
                    <p class="demo">
                        <span>{{__('Sujet')}}</span>
                        <img src="{{asset('storage/img/icon-plus.svg')}}">
                        <span>{{__('Verbe')}}</span>
                        <img src="{{asset('storage/img/icon-plus.svg')}}">
                        <span>{{__('Compléments')}}</span>
                        <img src="{{asset('storage/img/icon-plus.svg')}}">
                        <span class="ajout">Wa</span>
                    </p>
                    <p class="demo">
                        <span>{{__('Sujet')}}</span>
                        <img src="{{asset('storage/img/icon-plus.svg')}}">
                        <span>{{__('Verbe')}}</span>
                        <img src="{{asset('storage/img/icon-plus.svg')}}">
                        <span class="ajout">Wa</span>
                        <img src="{{asset('storage/img/icon-plus.svg')}}">
                        <span>{{__('Compléments')}}</span>
                    </p>
                    <p class="demo">
                        <span>{{__('Sujet')}}</span>
                        <img src="{{asset('storage/img/icon-plus.svg')}}">
                        <span class="ajout">Wa</span>
                        <img src="{{asset('storage/img/icon-plus.svg')}}">
                        <span>{{__('Verbe')}}</span>
                        <img src="{{asset('storage/img/icon-plus.svg')}}">
                        <span>{{__('Compléments')}}</span>
                    </p>
                    <p class="demo">
                        <span class="ajout">Wa</span>
                        <img src="{{asset('storage/img/icon-plus.svg')}}">
                        <span>{{__('Sujet')}}</span>
                        <img src="{{asset('storage/img/icon-plus.svg')}}">
                        <span>{{__('Verbe')}}</span>
                        <img src="{{asset('storage/img/icon-plus.svg')}}">
                        <span>{{__('Compléments')}}</span>
                    </p>
                    <p class="exemple">
                        <span>{{__('Exemple')}} : </span>
                        {{__('Aimes-tu les fruits ?')}}
                        <img src="{{asset('storage/img/icon-arrow-right-left.svg')}}">
                        {{__('Toi Aimer Fruit ?')}}
                        <img src="{{asset('storage/img/icon-arrow-right-left.svg')}}">
                        Se Da JuMo Wa
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="exclamative" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{__('La phrase exclamative')}}</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="close">
                        <img src="{{asset('storage/img/icon-close.svg')}}" alt="fermer le popup">
                    </button>

                </div>
                <div class="modal-body">
                    <p>{{__('Les phrases exclamatives ou impératives se construisent de la même manière que la phrase déclarative avec l’ajout du point d’exclamation en fin de phrase.')}}</p>
                    <p class="demo">
                        <span>{{__('Sujet')}}</span>
                        <img src="{{asset('storage/img/icon-plus.svg')}}">
                        <span>{{__('Verbe')}}</span>
                        <img src="{{asset('storage/img/icon-plus.svg')}}">
                        <span>{{__('Compléments')}}</span>
                        <img src="{{asset('storage/img/icon-plus.svg')}}">
                        <span class="ajout"> !</span>
                    </p>
                    <p class="exemple">
                        <span>{{__('Exemple')}} : </span>
                        {{__('Mange tes fruits !')}}
                        <img src="{{asset('storage/img/icon-arrow-right-left.svg')}}">
                        {{__('Toi Manger Fruits !')}}
                        <img src="{{asset('storage/img/icon-arrow-right-left.svg')}}">
                        Se BuLu JuMo !
                    </p>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="complements" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{__('L\'ordre des compléments')}}</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="close">
                        <img src="{{asset('storage/img/icon-close.svg')}}" alt="fermer le popup">
                    </button>

                </div>
                <div class="modal-body">
                    <p>{{__('Les compléments doivent toujours se trouver en fin de phrase. Leur ordre n\'est cependant pas défini.')}}</p>
                    <p class="demo">
                        <span>{{__('Sujet')}}</span>
                        <img src="{{asset('storage/img/icon-plus.svg')}}">
                        <span>{{__('Verbe')}}</span>
                        <img src="{{asset('storage/img/icon-plus.svg')}}">
                        <span class="ajout">{{__('Complément de lieu')}}</span>
                        <img src="{{asset('storage/img/icon-plus.svg')}}">
                        <span class="ajout">{{__('Complément de temps')}}</span>
                    </p>
                    <p class="demo">
                        <span>{{__('Sujet')}}</span>
                        <img src="{{asset('storage/img/icon-plus.svg')}}">
                        <span>{{__('Verbe')}}</span>
                        <img src="{{asset('storage/img/icon-plus.svg')}}">
                        <span class="ajout">{{__('Complément de temps')}}</span>
                        <img src="{{asset('storage/img/icon-plus.svg')}}">
                        <span class="ajout">{{__('Complément de lieu')}}</span>
                    </p>
                    <p class="exemple">
                        <span>{{__('Exemple')}} : </span>
                        {{__('Nous partirons dans le désert dans trois jours')}}
                        <img src="{{asset('storage/img/icon-arrow-right-left.svg')}}">
                        {{__('Nous Partir Dans Désert Dans 3 Jours')}}
                        <img src="{{asset('storage/img/icon-arrow-right-left.svg')}}">
                        SaSi DeNe Ni LiPuNoSo Ni Ti Gu
                    </p>
                    <p class="exemple">
                        <span>{{__('Exemple')}} 2 : </span>
                        {{__('Nous partirons dans trois jours dans le désert')}}
                        <img src="{{asset('storage/img/icon-arrow-right-left.svg')}}">
                        {{__('Nous Partir Dans 3 Jours Dans Désert')}}
                        <img src="{{asset('storage/img/icon-arrow-right-left.svg')}}">
                        SaSi DeNe Ni Ti Gu Ni LiPuNoSo
                    </p>

                </div>
            </div>
        </div>
    </div>



    <!----------
          MOTS
        ------------>
    <h3 class="text-center mt-5" style="color: #575757; font-size: 30px; font-weight: 600;">{{__('Mots')}}</h3>

    <div class="container construction d-flex justify-content-center flex-wrap mt-4">
        <button class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="cursor: pointer; width: 460px !important; border-radius: 8px  !important;" data-bs-toggle="modal" data-bs-target="#basics">
            <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">{{__('Base de la langue')}}</div>
            <div><img src="{{asset('storage/img/icon-arrow-right.svg')}}" height="15" alt="arrow right open modal"></div>
        </button>
        <button class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="cursor: pointer; width: 460px !important; border-radius: 8px  !important;" data-bs-toggle="modal" data-bs-target="#particularites">
            <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">{{__('Précisions')}}</div>
            <div><img src="{{asset('storage/img/icon-arrow-right.svg')}}" height="15" alt="arrow right open modal"></div>
        </button>
        <button class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="cursor: pointer; width: 460px !important; border-radius: 8px  !important;" data-bs-toggle="modal" data-bs-target="#genres">
            <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">{{__('Genres')}}</div>
            <div><img src="{{asset('storage/img/icon-arrow-right.svg')}}" height="15" alt="arrow right open modal"></div>
        </button>
        <button class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="cursor: pointer; width: 460px !important; border-radius: 8px  !important;" data-bs-toggle="modal" data-bs-target="#pluriel">
            <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">{{__('Pluriel')}}</div>
            <div><img src="{{asset('storage/img/icon-arrow-right.svg')}}" height="15" alt="arrow right open modal"></div>
        </button>
        <button class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="cursor: pointer; width: 460px !important; border-radius: 8px  !important;" data-bs-toggle="modal" data-bs-target="#adjectif">
            <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">{{__('Adjectif')}}</div>
            <div><img src="{{asset('storage/img/icon-arrow-right.svg')}}" height="15" alt="arrow right open modal"></div>
        </button>
        <button class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="cursor: pointer; width: 460px !important; border-radius: 8px  !important;" data-bs-toggle="modal" data-bs-target="#article">
            <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">{{__('Article')}}</div>
            <div><img src="{{asset('storage/img/icon-arrow-right.svg')}}" height="15" alt="arrow right open modal"></div>
        </button>
        <button class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="cursor: pointer; width: 460px !important; border-radius: 8px  !important;" data-bs-toggle="modal" data-bs-target="#conjonction">
            <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">{{__('Conjonction & préposition')}}</div>
            <div><img src="{{asset('storage/img/icon-arrow-right.svg')}}" height="15" alt="arrow right open modal"></div>
        </button>
        <button class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="cursor: pointer; width: 460px !important; border-radius: 8px  !important;" data-bs-toggle="modal" data-bs-target="#verbe">
            <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">{{__('Verbe')}}</div>
            <div><img src="{{asset('storage/img/icon-arrow-right.svg')}}" height="15" alt="arrow right open modal"></div>
        </button>
        <button class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="cursor: pointer; width: 460px !important; border-radius: 8px  !important;" data-bs-toggle="modal" data-bs-target="#propre">
            <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">{{__('Nom propre')}}</div>
            <div><img src="{{asset('storage/img/icon-arrow-right.svg')}}" height="15" alt="arrow right open modal"></div>
        </button>
        <button class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="cursor: pointer; width: 460px !important; border-radius: 8px  !important;" data-bs-toggle="modal" data-bs-target="#ponctuation">
            <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">{{__('Ponctuation')}}</div>
            <div><img src="{{asset('storage/img/icon-arrow-right.svg')}}" height="15" alt="arrow right open modal"></div>
        </button>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="basics" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{__('Base de la langue')}}</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="close">
                        <img src="{{asset('storage/img/icon-close.svg')}}" alt="fermer le popup">
                    </button>

                </div>
                <div class="modal-body">
                    <p>{{__('La base de MaCuSi se tient dans une courte liste de syllabes ayant comme traduction les concepts les plus basiques possibles afin de les rendre modulable.')}}</p>
                <div>
                    <p>{{__('Liste des mots formant la base de MaCuSi')}}:</p>
                    <ul class="basics" style="list-style-type: disc; -webkit-columns: 2; -moz-columns: 2; columns: 2; list-style-position: inside">
                        @foreach(\App\Models\Syllabe::all() as $syllabe)
                            @if(json_decode($syllabe->trads)->$locale != "")
                                <li style="display: inline-block; width: 50%"><span style="float: left; width: 1.3em">{{$syllabe->syllabe}}</span><img style="height: 15px" class="mx-2" src="{{\Illuminate\Support\Facades\Storage::url('img/icon-simple-arrow.svg')}}">{{json_decode($syllabe->trads)->$locale}}</li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="particularites" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{__('Précisions')}}</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="close">
                        <img src="{{asset('storage/img/icon-close.svg')}}" alt="fermer le popup">
                    </button>

                </div>
                <div class="modal-body">
                    <p>{{__('Les mots en MaCuSi ne comportent pas d’accent, pas de tréma, pas de cédille, pas de trait d’union, pas de ligature, pas d’apostrophe, pas de liaison, pas d’élision. Les lettres H, K, Q, Y ne sont utilisées que pour les noms propres.')}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="genres" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{__('Genre du nom')}}</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="close">
                        <img src="{{asset('storage/img/icon-close.svg')}}" alt="fermer le popup">
                    </button>

                </div>
                <div class="modal-body">
                    <p>{{__('Contrairement à beaucoup de langues, il n’y a pas de genre en MaCuSi. Les noms ne sont donc ni masculin, ni féminin.')}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="pluriel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{__('Pluriel')}}</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="close">
                        <img src="{{asset('storage/img/icon-close.svg')}}" alt="fermer le popup">
                    </button>

                </div>
                <div class="modal-body">
                    <p>{{__('Il n’y a pas de pluriel. Le sens de la phrase est déterminé par le contexte. Dans certains rares cas, pour préciser un pluriel, on peut utiliser le nom avec l’adjonction du mot [Si].')}}</p>
                    <p class="demo"><span>{{__('Un fruit, des fruits')}} <img src="{{Storage::url('img/icon-simple-arrow.svg')}}" style="height: 15px"> {{__('Fruit')}}</span></p>
                    <p class="demo"><span>{{__('Fruits')}} => JuMo, JuMo</span><span class="ajout">Si</span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="adjectif" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{__('Adjectif')}}</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="close">
                        <img src="{{asset('storage/img/icon-close.svg')}}" alt="fermer le popup">
                    </button>

                </div>
                <div class="modal-body">
                    <p>{{__('Pas d’accord pour les adjectifs. Il se place toujours derrière le nom.')}}</p>
                    <p class="demo">
                        <span>{{__('Un petit citron')}}
                            <img src="{{Storage::url('img/icon-simple-arrow.svg')}}" style="height: 15px">
                            {{__('Citron Petit')}}
                            <img src="{{Storage::url('img/icon-simple-arrow.svg')}}" style="height: 15px">
                            JuMoXeGiVu No
                        </span>
                    </p>
                    <p class="demo">
                        <span>{{__('Une grande banane')}}
                            <img src="{{Storage::url('img/icon-simple-arrow.svg')}}" style="height: 15px">
                            {{__('Banane Grand')}}
                            <img src="{{Storage::url('img/icon-simple-arrow.svg')}}" style="height: 15px">
                            JuMoXeNu Nu
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="article" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{__('Article')}}</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="close">
                        <img src="{{asset('storage/img/icon-close.svg')}}" alt="fermer le popup">
                    </button>

                </div>
                <div class="modal-body">
                    <p>{{__('L\'article n\'est pas nécessaire en MaCuSi.')}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="conjonction" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{__('Conjonction & préposition')}}</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="close">
                        <img src="{{asset('storage/img/icon-close.svg')}}" alt="fermer le popup">
                    </button>

                </div>
                <div class="modal-body">
                    <p>{{__('Ils ne sont pas très utilisés en MaCuSi.')}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="verbe" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{__('Verbe')}}</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="close">
                        <img src="{{asset('storage/img/icon-close.svg')}}" alt="fermer le popup">
                    </button>

                </div>
                <div class="modal-body">
                    <p>{{__('Le verbe se présente toujours sous sa forme infinitive.')}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="propre" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{__('Nom propre')}}</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="close">
                        <img src="{{asset('storage/img/icon-close.svg')}}" alt="fermer le popup">
                    </button>

                </div>
                <div class="modal-body">
                    <p>{{__('Le nom propre s’écrit comme dans sa langue d’origine.')}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="ponctuation" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{__('Ponctuation')}}</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="close">
                        <img src="{{asset('storage/img/icon-close.svg')}}" alt="fermer le popup">
                    </button>

                </div>
                <div class="modal-body">
                    <p>{{__('Le MaCuSi utilise les signes de ponctuation occidentaux suivant :')}}</p>
                    <ul>
                        <li>{{__('Le point [.] pour terminer une phrase ou pour écrire un mot en abrégé;')}}</li>
                        <li>{{__('Le point-virgule [;] pour séparer des propositions de même nature;')}}</li>
                        <li>{{__('La virgule [,] pour séparer les éléments semblables, une explication…;')}}</li>
                        <li>{{__('Le point d\'exclamation [!] pour exprimer une exclamation ou un impératif;')}}</li>
                        <li>{{__('Les points de suspension […] pour indiquer l\'incomplétude;')}}</li>
                        <li>{{__('Les deux points [:] pour présenter une citation, une analyse ou une énumération;')}}</li>
                        <li>{{__('Les guillemets [« »] [\'\'] pour encadrer une citation, un discours…;')}}</li>
                        <li>{{__('Les parenthèses [()] pour ajouter une indication accessoire.')}}</li>
                    </ul>
                    <p>
                        {{__('Le MaCuSi n’utilise pas le point d’interrogation, le tiret, les crochets, l’astérisque ni l’alinéa.')}}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!----------
         CONJUGAISON
       ------------>
    <h3 class="text-center mt-5" style="color: #575757; font-size: 30px; font-weight: 600;">{{__('Conjugaison')}}</h3>

    <div class="container construction d-flex justify-content-center flex-wrap mt-4">
        <button class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="width: 460px !important; border-radius: 8px  !important;" data-bs-toggle="modal" data-bs-target="#present">
            <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">{{__('Présent')}}</div>
            <div><img src="{{asset('storage/img/icon-arrow-right.svg')}}" height="15" alt="arrow right open modal"></div>
        </button>
        <button class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="width: 460px !important; border-radius: 8px  !important;" data-bs-toggle="modal" data-bs-target="#passe">
            <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">{{__('Passé')}}</div>
            <div><img src="{{asset('storage/img/icon-arrow-right.svg')}}" height="15" alt="arrow right open modal"></div>
        </button>
        <button class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="width: 460px !important; border-radius: 8px  !important;" data-bs-toggle="modal" data-bs-target="#futur">
            <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">{{__('Futur')}}</div>
            <div><img src="{{asset('storage/img/icon-arrow-right.svg')}}" height="15" alt="arrow right open modal"></div>
        </button>
        <button class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="width: 460px !important; border-radius: 8px  !important;" data-bs-toggle="modal" data-bs-target="#conditionnel">
            <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">{{__('Conditionnel')}}</div>
            <div><img src="{{asset('storage/img/icon-arrow-right.svg')}}" height="15" alt="arrow right open modal"></div>
        </button>
        <button class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="width: 460px !important; border-radius: 8px  !important;" data-bs-toggle="modal" data-bs-target="#condpasse">
            <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">{{__('Conditionnel passé')}}</div>
            <div><img src="{{asset('storage/img/icon-arrow-right.svg')}}" height="15" alt="arrow right open modal"></div>
        </button>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="present" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{__('Présent')}}</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="close">
                        <img src="{{asset('storage/img/icon-close.svg')}}" alt="fermer le popup">
                    </button>

                </div>
                <div class="modal-body">
                    <p>{{__('Le verbe ne s\'accorde pas avec le sujet. Il restera toujours à l\'infinitif.')}}</p>
                    <p class="demo"><span>{{__('Sujet')}}</span><img src="{{asset('storage/img/icon-plus.svg')}}"><span>{{__('Verbe')}}</span></p>
                    <p class="exemple"><span>{{__('Exemple')}} : </span>{{__('Je mange')}} <img src="{{asset('storage/img/icon-arrow-right-left.svg')}}">
                        {{__('Moi Manger')}} <img src="{{asset('storage/img/icon-arrow-right-left.svg')}}"> Sa BuLu</p>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="passe" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{__('Passé')}}</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="close">
                        <img src="{{asset('storage/img/icon-close.svg')}}" alt="fermer le popup">
                    </button>

                </div>
                <div class="modal-body">
                    <p>{{__('Le verbe au passé est toujours suivi du terme [We] ou d\'une précision que le temps pendant laquelle se passe l\'action.')}}</p>
                    <p class="demo"><span>{{__('Verbe')}}</span><img src="{{asset('storage/img/icon-plus.svg')}}"><span class="ajout">We</span></p>
                    <p class="demo"><span>{{__('Verbe')}}</span><img src="{{asset('storage/img/icon-plus.svg')}}"><span class="ajout">{{__('Précision sur le temps de l\'action')}}</span></p>
                    <p class="exemple"><span>{{__('Exemple')}} : </span>{{__('Je mangeais un fruit')}} <img src="{{asset('storage/img/icon-arrow-right-left.svg')}}">
                        {{__('Moi Manger Passé Fruit')}} <img src="{{asset('storage/img/icon-arrow-right-left.svg')}}"> Sa BuLu We JuMo</p>
                    <p class="exemple"><span style="color: transparent">{{__('Exemple')}} : </span>{{__("J'ai mangé un fruit hier")}} <img src="{{asset('storage/img/icon-arrow-right-left.svg')}}"> {{__('Moi Manger Fruits Hier')}} <img src="{{asset('storage/img/icon-arrow-right-left.svg')}}"> Sa BuLu JuMo GuZeTa</p>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="futur" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{__('Futur')}}</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="close">
                        <img src="{{asset('storage/img/icon-close.svg')}}" alt="fermer le popup">
                    </button>

                </div>
                <div class="modal-body">
                    <p>{{__('Le verbe au futur est toujours suivi du terme [ZeWe] ou d\'une précision que le temps pendant laquelle se passe l\'action.')}}</p>
                    <p class="demo"><span>{{__('Verbe')}}</span><img src="{{asset('storage/img/icon-plus.svg')}}"><span class="ajout">ZeWe</span></p>
                    <p class="demo"><span>{{__('Verbe')}}</span><img src="{{asset('storage/img/icon-plus.svg')}}"><span class="ajout">{{__('Précision sur le temps de l\'action')}}</span></p>
                    <p class="exemple"><span>{{__('Exemple')}} : </span>{{__('Je mangerai un fruit')}} <img src="{{asset('storage/img/icon-arrow-right-left.svg')}}">
                        {{__('Moi Manger Futur Fruit')}} <img src="{{asset('storage/img/icon-arrow-right-left.svg')}}"> Sa BuLu ZeWe JuMo</p>
                    <p class="exemple"><span style="color: transparent">{{__('Exemple')}} : </span>{{__('Je mangerai un fruit demain')}} <img src="{{asset('storage/img/icon-arrow-right-left.svg')}}"> {{__('Moi Manger Fruits Demain')}} <img src="{{asset('storage/img/icon-arrow-right-left.svg')}}"> Sa BuLu JuMo GuZaTa</p>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="conditionnel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{__('Conditionnel')}}</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="close">
                        <img src="{{asset('storage/img/icon-close.svg')}}" alt="fermer le popup">
                    </button>

                </div>
                <div class="modal-body">
                    <p>{{__('Le verbe au conditionnel est toujours suivi du terme [Wi] ou d\'une précision que le temps pendant laquelle se passe l\'action.')}}</p>
                    <p class="demo"><span>{{__('Verbe')}}</span><img src="{{asset('storage/img/icon-plus.svg')}}"><span class="ajout">Wi</span></p>
                    <p class="demo"><span>{{__('Verbe')}}</span><img src="{{asset('storage/img/icon-plus.svg')}}"><span class="ajout">{{__('Précision sur le temps de l\'action')}}</span></p>
                    <p class="exemple"><span>{{__('Exemple')}} : </span>{{__('Je mangerais un fruit')}} <img src="{{asset('storage/img/icon-arrow-right-left.svg')}}">
                        {{__('Moi Manger Condition Fruit')}} <img src="{{asset('storage/img/icon-arrow-right-left.svg')}}"> Sa BuLu Wi JuMo</p>
                    <p class="exemple"><span>{{__('Exemple')}}  2 : </span>{{__('Je mangerais un fruit si tu en as acheté')}} <img src="{{asset('storage/img/icon-arrow-right-left.svg')}}">
                        {{__('Moi Manger Fruit Condition Toi Acheter Passé Fruit')}} <img src="{{asset('storage/img/icon-arrow-right-left.svg')}}"> Sa BuLu JuMo Wi Se DoJeDuJa We JuMo</p>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="condpasse" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{__('Conditionnel passé')}}</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="close">
                        <img src="{{asset('storage/img/icon-close.svg')}}" alt="fermer le popup">
                    </button>

                </div>
                <div class="modal-body">
                    <p>{{__('Le verbe au conditionnel passé est toujours suivi des temes [We] et [Wi].')}}</p>
                    <p class="demo"><span>{{__('Verbe')}}</span><img src="{{asset('storage/img/icon-plus.svg')}}"><span class="ajout">We</span><img src="{{asset('storage/img/icon-plus.svg')}}"><span class="ajout">Wi</span></p>
                    <p class="exemple"><span>{{__('Exemple')}} : </span>{{__('J\'aurais mangé un fruit')}} <img src="{{asset('storage/img/icon-arrow-right-left.svg')}}">
                        {{__('Moi Manger Passé Condition Fruit')}} <img src="{{asset('storage/img/icon-arrow-right-left.svg')}}"> Sa BuLu We Wi JuMo</p>

                </div>
            </div>
        </div>
    </div>




    <!--

            <p>
                <b>
                    La phrase déclarative se construit de la manière suivante : le sujet se met en début de phrase suivi par le verbe et ensuite viennent les différents compléments.
                </b>
            </p>
            <table align='center'>
                <tr>
                    <td>
                        <table border=1>
                            <tr>
                                <td>{{__('Sujet')}}</td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        +
                    </td>
                    <td>
                        <table border=1>
                            <tr>
                                <td>{{__('Verbe')}}</td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        +
                    </td>
                    <td>
                        <table border=1>
                            <tr>
                                <td>Compléments</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <p>
                <i>
                    J’aime les fruits => Moi Aimer Fruit => Sa Da JuMo
                </i>
            </p>
            <p>
                <b>
                    La phrase négative se construit de la même manière que la phrase déclarative mais avec
                    l’ajout du mot [Ze] derrière le verbe.</b>
            </p>
            <table align='center'>
                <tr>
                    <td>
                        <table border=1>
                            <tr>
                                <td>
                                    Sujet
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        +
                    </td>
                    <td>
                        <table border=1>
                            <tr>
                                <td>
                                    Verbe
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        +
                    </td>
                    <td>
                        <table border=1>
                            <tr>
                                <td>
                                    Ze
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        +
                    </td>
                    <td>
                        <table border=1>
                            <tr>
                                <td>
                                    Compléments
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <p>
                <i>
                    Je n’aime pas les fruits => Moi Aimer Pas Fruit => Sa Da Ze JuMo
                </i>
            </p>
            <p>
                <b>
                    La phrase interrogative se construit de la même manière que la phrase déclarative avec
                    l’ajout du mot [Wa] où l’on veut dans la phrase.
                </b>
            </p>
            <table align="center">
                <tr>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    Sujet
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        +
                    </td>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    Verbe
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        +
                    </td>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    Compléments
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        +
                    </td>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    Wa
                                </td>
                            </tr>
                        </table>
                </tr> 
                <tr>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    Sujet
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        +
                    </td>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    Verbe
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        +
                    </td>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    Wa
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        +
                    </td>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    Compléments
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr> 
                <tr>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    Sujet
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        +
                    </td>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    Wa
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        +
                    </td>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    Verbe
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        +
                    </td>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    Compléments
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr> 
                <tr>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    Wa
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        +
                    </td>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    Sujet
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        +
                    </td>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    Verbe
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        +
                    </td>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    Compléments
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <p>
                <i>
                    Aimes-tu les fruits ? => Toi Aimer Fruit ? => Se Da JuMo Wa
                </i>
            </p>
            <p>
                <b>
                    Les phrases exclamatives ou impératives se construisent de la même manière que la
                    phrase déclarative avec l’ajout du point d’exclamation en fin de phrase.
                </b>
            </p>
            <table align="center"><tr>
                    <td>
                        <table border=1>
                            <tr>
                                <td>
                                    Sujet
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        +
                    </td>
                    <td>
                        <table border=1>
                            <tr>
                                <td>
                                    Verbe
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        +
                    </td>
                    <td>
                        <table border=1>
                            <tr>
                                <td>
                                    Compléments
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        +
                    </td>
                    <td>
                        <table border=1>
                            <tr>
                                <td>
                                    !
                                </td>
                            </tr>
                        </table>
                    </td> 
                </tr>
            </table>
            <p>
                <i>
                    Que j’aime les fruits ! => Moi Aimer Fruit ! => Sa Da JuMo !
                    <br>
                    <br>
                    Mange tes fruits ! => Toi Manger Fruits ! => Se BuLu JuMo !
                </i>
            </p>
            <p>
                <b>
                    L’ordre des compléments, lui, n’est pas défini.
                </b>
            </p>
            <table align="center">
                <tr>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    Sujet
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        +
                    </td>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    Verbe
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        +
                    </td>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    Complément de lieu
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        +
                    </td>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    Complément de temps
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    Sujet
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        +
                    </td>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    Verbe
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        +
                    </td>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    Complément de temps
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        +
                    </td>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    Complément de lieu
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <p>
                <i>
                    Nous partirons dans le désert dans trois jours => Nous Partir Dans Désert Dans 3 Jours => SaSi DeNe Ni LiPuNoSo Ni Ti Gu
                    <br>
                    <br>
                    Nous partirons dans trois jours dans le désert => Nous Partir Dans 3 Jours Dans Désert => SaSi DeNe Ni Ti Gu Ni LiPuNoSo
                </i>
            </p>
            <h3>
                Les Mots
            </h3>
            <p>
                Les mots en MaCuSi ne comportent pas d’accent, pas de tréma, pas de cédille, pas de trait
                d’union, pas de ligature, pas d’apostrophe, pas de liaison, pas d’élision. Les lettres H, K, Q, Y
                ne sont utilisées que pour les noms propres.
            </p>
            <b>
                Genre du nom
            </b>
            <p>
                Contrairement à beaucoup de langues, il n’y a pas de genre en MaCuSi. Les noms ne sont
                donc ni masculin, ni féminin.
            </p>
            <b>
                Pluriel des noms
            </b>
            <p>
                Il n’y a pas de pluriel. Le sens de la phrase est déterminé par le contexte. Dans certains rares
                cas, pour préciser un pluriel, on peut utiliser le nom avec l’adjonction du mot [Si].
                <br>
                <br>
                <i>
                    Un fruit, des fruits => Fruit, Fruits => JuMo, JuMoSi
                </i>
            </p>
            <b>
                Adjectif
            </b>
            <p>
                Pas d’accord pour les adjectifs. Il se place toujours derrière le nom.
                <br>
                <br>
                <i>
                    Un petit citron, des grandes bananes => Citron Petit, Banane Grand => JuMoXeGiVu No, JuMoXeNu Nu
                </i>
            </p>
            <b>
                Article
            </b>
            <p>
                L’article n’est pas nécessaire en MaCuSi.
            </p>
            <b>
                Conjonction et préposition
            </b>
            <p>
                Ils ne sont pas très utilisés en MaCuSi.
            </p>
            <b>
                Verbe
            </b>
            <p>
                Le verbe se présente toujours sous sa forme infinitive.
            </p>
            <b>
                Nom propre
            </b>
            <p>
                Le nom propre s’écrit comme dans sa langue d’origine.
            </p>
            <b>
                Ponctuation
            </b>
            <p>
                Le MaCuSi utilise les signes de ponctuation occidentaux suivant :
            <ul>
                <li>
                    Le point [.] pour terminer une phrase ou pour écrire un mot en abrégé;
                </li>
                <li>
                    Le point-virgule [;] pour séparer des propositions de même nature;
                </li>
                <li>
                    La virgule [,] pour séparer les éléments semblables, une explication…;
                </li>
                <li>
                    Le point d’exclamation [!] pour exprimer une exclamation ou un impératif;
                </li>
                <li>
                    Les points de suspension […] pour indiquer l’incomplétude;
                </li>
                <li>
                    Les deux points [:] pour présenter une citation, une analyse ou une énumération;
                </li>
                <li>
                    Les guillemets [« »] [''] pour encadrer une citation, un discours…;
                </li>
                <li>
                    Les parenthèses [()] pour ajouter une indication accessoire.
                </li>
            </ul>
            Le MaCuSi n’utilise pas le point d’interrogation, le tiret, les crochets, l’astérisque ni
            l’alinéa.
            </p>
            <br>
            <h1 align="center">
                Conjugaison
            </h1>
            <p>
                Le verbe ne s’accorde pas avec le sujet. Il reste toujours à l’infinitif.
            </p>
            <b>
                Présent
            </b>
            <br>
            <table align="center" border=1>
                <tr>
                    <td>
                        Verbe
                    </td>
                </tr>
            </table>
             
            <p>
                <i>
                    Je mange un fruit => Moi Manger Fruit => Sa BuLu JuMo
                </i>
            </p>
            <b>
                Passé
            </b>
            <br>
            <table align="center">
                <tr>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    Verbe
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        +
                    </td>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    We
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr> 
            </table>
            <table align="center">
                <tr>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    Verbe
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        +
                    </td>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    Information sur le temps de l’action
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <p>
                <i>
                    Je mangeais un fruit => Moi Manger Passé Fruit => Sa BuLu We JuMo
                    <br>
                    <br>
                    Hier, j’ai mangé un fruit => Moi Manger Fruit Hier => Sa BuLu JuMo GuZeTa
                </i>
            </p>
            <b>
                Futur
            </b>
            <br>
            <table align="center">
                <tr>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    Verbe
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        +
                    </td>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    ZeWe
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table> 
            <table align="center">
                <tr>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    Verbe
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        +
                    </td>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    Information sur le temps de l’action
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <p>
                <i>
                    Je mangerai un fruit => Moi Manger Futur Fruit => Sa BuLu ZeWe JuMo
                    <br>
                    <br>
                    Je mangerai un fruit demain => Moi Manger Fruit Demain => Sa BuLu JuMo GuZaTa
                </i>
            </p>
            <b>
                Conditionnel
            </b>
            <br>
            <table align="center">
                <tr>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    Verbe
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        +
                    </td>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    Wi
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr> 
            </table>
            <p>
                <i>
                    Je mangerais un fruit => Moi Manger Condition Fruit => Sa BuLu Wi JuMo
                    <br>
                    <br>
                    Je mangerais un fruit si tu en as achetés => Moi Manger Fruit Condition Toi Avoir Acheter Fruit => Sa BuLu JuMo Wi Se DoJeDuJa We JuMo
                </i>
            </p>
            <b>
                Conditionnel passé
            </b>
            <br>
            <table align="center">
                <tr>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    Verbe
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        +
                    </td>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    We
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        +
                    </td>
                    <td>
                        <table border=1 align="center">
                            <tr>
                                <td>
                                    Wi
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr> 
            </table>
            <p>
                <i>
                    J’aurais mangé un fruit => Moi Manger Passé Condition Fruit => Sa BuLu We Wi JuMo
                </i>
            </p>
        </div>
        -->

@endsection

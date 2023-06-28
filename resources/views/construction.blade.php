@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="h3-title">Construction</h1>

        <!----------
          GRAMMAIRE
        ------------>
        <h3 class="text-center mt-5" style="color: #575757; font-size: 30px; font-weight: 600;">Grammaire</h3>
        <div class="container d-flex justify-content-center flex-wrap mt-4">
            <div class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="width: 460px !important; border-radius: 8px  !important; cursor: pointer;" onclick="modal_open('declarative')">
                <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">La phrase déclarative</div>
                <div><img src="{{asset('storage/img/icon-arrow.svg')}}" height="15"></div>
            </div>
            <div class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="width: 460px !important; border-radius: 8px  !important;">
                <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">La phrase négative</div>
                <div><img src="{{asset('storage/img/icon-arrow.svg')}}" height="15"></div>
            </div>
            <div class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="width: 460px !important; border-radius: 8px  !important;">
                <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">La phrase interrogative</div>
                <div><img src="{{asset('storage/img/icon-arrow.svg')}}" height="15"></div>
            </div>
            <div class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="width: 460px !important; border-radius: 8px  !important;">
                <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">La phrase exclamative</div>
                <div><img src="{{asset('storage/img/icon-arrow.svg')}}" height="15"></div>
            </div>
            <div class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="width: 460px !important; border-radius: 8px  !important;">
                <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">L'ordre des compléments</div>
                <div><img src="{{asset('storage/img/icon-arrow.svg')}}" height="15"></div>
            </div>
        </div>
    </div>
    <dialog id="declarative" class="construction">
        <button class="close" onclick="modal_close('declarative')"><img src="{{asset('storage/img/icon-close.svg')}}" alt="fermer le popup"></button>
        <h3>La phrase déclarative</h3>
        <p>Elle se construit de la manière suivante : le sujet se met en début de phrase suivi par le verbe et ensuite viennent les différents compléments.</p>
        <p class="demo"><span>Sujet</span><img src="{{asset('storage/img/icon-plus.svg')}}"><span>Verbe</span><img src="{{asset('storage/img/icon-plus.svg')}}"><span>Complément</span></p>
        <p class="exemple"><span>Exemple : </span>J'aime les fruits <img src="{{asset('storage/img/icon-arrow-right-left.svg')}}"> Moi Aimer Fruits <img src="{{asset('storage/img/icon-arrow-right-left.svg')}}"> Sa Da JuMo</p>
    </dialog>
    <dialog id="negative" class="construction">

    </dialog>
    <dialog id="interrogative" class="construction">

    </dialog>
    <dialog id="exclamative" class="construction">

    </dialog>
    <dialog id="complements" class="construction">

    </dialog>


    <!----------
          MOTS
        ------------>
    <h3 class="text-center mt-5" style="color: #575757; font-size: 30px; font-weight: 600;">Les mots</h3>

    <div class="container d-flex justify-content-center flex-wrap mt-4">
        <div class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="width: 460px !important; border-radius: 8px  !important;">
            <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">Particularités</div>
            <div><img src="{{asset('storage/img/icon-arrow.svg')}}" height="15"></div>
        </div>
        <div class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="width: 460px !important; border-radius: 8px  !important;">
            <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">Genres</div>
            <div><img src="{{asset('storage/img/icon-arrow.svg')}}" height="15"></div>
        </div>
        <div class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="width: 460px !important; border-radius: 8px  !important;">
            <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">Pluriel</div>
            <div><img src="{{asset('storage/img/icon-arrow.svg')}}" height="15"></div>
        </div>
        <div class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="width: 460px !important; border-radius: 8px  !important;">
            <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">Adjectif</div>
            <div><img src="{{asset('storage/img/icon-arrow.svg')}}" height="15"></div>
        </div>
        <div class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="width: 460px !important; border-radius: 8px  !important;">
            <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">Article</div>
            <div><img src="{{asset('storage/img/icon-arrow.svg')}}" height="15"></div>
        </div>
        <div class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="width: 460px !important; border-radius: 8px  !important;">
            <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">Conjugaison & préposition</div>
            <div><img src="{{asset('storage/img/icon-arrow.svg')}}" height="15"></div>
        </div>
        <div class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="width: 460px !important; border-radius: 8px  !important;">
            <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">Verbe</div>
            <div><img src="{{asset('storage/img/icon-arrow.svg')}}" height="15"></div>
        </div>
        <div class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="width: 460px !important; border-radius: 8px  !important;">
            <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">Nom propre</div>
            <div><img src="{{asset('storage/img/icon-arrow.svg')}}" height="15"></div>
        </div>
        <div class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="width: 460px !important; border-radius: 8px  !important;">
            <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">Ponctuation</div>
            <div><img src="{{asset('storage/img/icon-arrow.svg')}}" height="15"></div>
        </div>
    </div>

    <!----------
         CONJUGAISON
       ------------>
    <h3 class="text-center mt-5" style="color: #575757; font-size: 30px; font-weight: 600;">La conjugaison</h3>

    <div class="container d-flex justify-content-center flex-wrap mt-4">
        <div class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="width: 460px !important; border-radius: 8px  !important;">
            <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">Présent</div>
            <div><img src="{{asset('storage/img/icon-arrow.svg')}}" height="15"></div>
        </div>
        <div class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="width: 460px !important; border-radius: 8px  !important;">
            <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">Passé</div>
            <div><img src="{{asset('storage/img/icon-arrow.svg')}}" height="15"></div>
        </div>
        <div class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="width: 460px !important; border-radius: 8px  !important;">
            <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">Futur</div>
            <div><img src="{{asset('storage/img/icon-arrow.svg')}}" height="15"></div>
        </div>
        <div class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="width: 460px !important; border-radius: 8px  !important;">
            <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">Conditionnel</div>
            <div><img src="{{asset('storage/img/icon-arrow.svg')}}" height="15"></div>
        </div>
        <div class="card d-flex flex-row justify-content-between border-0 shadow p-3 mx-3 my-2" style="width: 460px !important; border-radius: 8px  !important;--">
            <div style="color: var(--secondary-color); font-size: 18px; line-height: 24px;">Conditionnel passé</div>
            <div><img src="{{asset('storage/img/icon-arrow.svg')}}" height="15"></div>
        </div>
    </div>
    <script>
        function modal_open(name) {
            let modal = document.getElementById(name);
            modal.setAttribute('open', true);
        }

        function modal_close(name){
            let modal = document.getElementById(name);
            modal.removeAttribute('open')
        }


    </script>




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
                                <td>Sujet</td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        +
                    </td>
                    <td>
                        <table border=1>
                            <tr>
                                <td>Verbe</td>
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

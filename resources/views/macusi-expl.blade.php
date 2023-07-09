@extends('layouts.app')

@section('content')
        <h3 class="h3-title mb-28 mt-50">Introduction</h3>
        <p class="mb-28 text-justify">Le <span class='MaCuSi'>MaCuSi</span> est une langue construite minimaliste aux niveaux phonologique et grammatical
            mais pas de manière lexicale. En effet, beaucoup de langues construites sont centrées sur un
            thème unique. Le <span class='MaCuSi'>MaCuSi</span> a été conçu pour permettre la génération de tous les mots d'une
            langue.</p>
        <p class="mb-28 text-justify">Phonologiquement, le <span class='MaCuSi'>MaCuSi</span> utilise dix-sept consonnes (b, c, d, f, g, j, l, m, n, p, r, s, t, v, w,
            x, z) et cinq voyelles (a, e, i, o, u). Une syllabe est composée d'une consonne écrite en
            majuscule suivie d'une voyelle écrite en minuscule. La prononciation de cette syllabe ne
            permet pas d'ambiguïté sonore.</p>
        <p class="mb-28 text-justify">Le principe du <span class='MaCuSi'>MaCuSi</span> est de n'avoir que 85 mots. Avec l'arrangement de ces 85 mots, il est
            possible de générer théoriquement plus de 377 milliards de mots différents d’une à six
            syllabes. L'idée générale étant de ne pas devoir apprendre autre chose que les 85 mots de
            base mais de comprendre ou de découvrir les combinaisons possibles et logiques, de
            repousser les limites du langage pour servir de moyen de communication entre locuteurs de
            langues différentes.
        </p>
        <p class="mb-28 text-justify">Du point de vue grammatical, le <span class='MaCuSi'>MaCuSi</span> veut garder que ce qui est essentiel et se caractérise
            par une absence de conjugaison, du genre des noms, de règles compliquées, d’exceptions,
            de particules...</p>
        <h3 class="h3-title mb-28">Avantages</h3>
        <p class="mb-28 text-justify">Le premier, et non des moindres, avantage de cette langue est de ne devoir apprendre que
            les 85 mots de vocabulaire. Ce qui permet d’apprendre la langue en seulement deux jours.</p>
        <p class="mb-28 text-justify">Le second avantage de cette langue est de garder l’alphabet latin moderne qui est connu par
            plus de 70% de la population mondiale. En effet, beaucoup de langues inventées utilisent un
            nouvel alphabet comprenant soit trop de signes, soit une logique peu évidente.</p>
        <p class="mb-28 text-justify">Le troisième avantage est de pouvoir utiliser le <span class='MaCuSi'>MaCuSi</span> à partir de n’importe quelle langue
            utilisant l’alphabet latin moderne. Il suffit juste d’avoir la traduction des 85 mots de base et
            de passer en construction Sujet - Verbe - Complément pour les langues qui n’utilisent pas ce
            type de construction.</p>
        <div class="container">
            <div class="row" style="margin-left: -24px; margin-right: -24px">
                <div class="col">
                    <h3 class="h3-title mb-28">Système d’écriture</h3>
                    <p class="mb-28 text-justify">Chacun des 85 mots est composé d’une consonne écrite en majuscule suivit d’une voyelle
                        écrite en minuscule. Exemple : Ba, Ce, Di, Fo, Gu…</p>
                </div>
                <div class="col">
                    <h3 class="h3-title mb-28">Phonologie</h3>
                    <p class="mb-28 text-justify">Il n’y a pas de contrainte réelle sur la manière de prononcer les sons. Bu peut se prononcer
                        Bu ou Bou… Be peut se prononcer Be ou Bé. Comme il n’y a que 22 phonèmes, il n’y a pas de
                        risque de confusion dans la prononciation.</p>
                </div>
            </div>
        </div>
        <h3 class="h3-title mb-28">En résumé</h3>
        <ul>
            <li>Auxiliaire conçue pour être simple afin de faciliter la communication;</li>
            <li>Logique conçue avec un raisonnement et sans irrégularité;</li>
            <li>Tous les mots sont construits au moyen d'un nombre
                réduit de racines qui se regroupent pour former les mots;</li>
            <li>Ne puise pas son vocabulaire dans une langue existante.</li>
        </ul>
@endsection

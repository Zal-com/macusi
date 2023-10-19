@extends('layouts.app')

@section('content')

    @if(! array_key_exists(strtoupper(app()->getLocale()), config('custom.available_languages')))
        @php
            app()->setLocale(config('app.fallback_locale'))
        @endphp
    @endif

    @if(app()->getLocale() == 'fr')
        @section('description', 'Le MaCuSi est une idéolangue minimaliste aux niveaux phonologique et grammatical mais pas de manière lexicale. En effet, beaucoup de langues construites sont centrées sur un thème unique. Le MaCuSi a été conçu pour permettre la génération de tous les mots d\'une langue.')
        <h3 class="h3-title mb-28 mt-50">Introduction</h3>
        <p class="mb-28 text-justify">Le <span class='MaCuSi'>MaCuSi</span> est une idéolangue minimaliste aux niveaux phonologique et grammatical
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
        <p>Le MaCuSi est une langue :</p>
        <ul>
            <li>Auxiliaire conçue pour être simple afin de faciliter la communication;</li>
            <li>Logique conçue avec un raisonnement et sans irrégularité;</li>
            <li>Tous les mots sont construits au moyen d'un nombre
                réduit de racines qui se regroupent pour former les mots;</li>
            <li>Ne puise pas son vocabulaire dans une langue existante.</li>
        </ul>
    @elseif(app()->getLocale() == 'en')
        @section('description', 'The MaCuSi is a minimalist ideolanguage in terms of phonology and grammar, but not lexically. Indeed, many constructed languages are centered around a single theme. The MaCuSi was designed to allow the generation of all the words of a language.')
        <h3 class="h3-title mb-28 mt-50">Introduction</h3>
        <p class="mb-28 text-justify">The <span class='MaCuSi'>MaCuSi</span> is a minimalist ideolanguage in terms of phonology and grammar,
            but not lexically. Indeed, many constructed languages are centered around a single theme. The
            <span class='MaCuSi'>MaCuSi</span> was designed to allow the generation of all the words of a language.</p>
        <p class="mb-28 text-justify">Phonologically, the <span class='MaCuSi'>MaCuSi</span> uses seventeen consonants (b, c, d, f, g, j, l, m, n, p, r, s, t, v, w,
            x, z) and five vowels (a, e, i, o, u). A syllable consists of a consonant written in uppercase
            followed by a vowel written in lowercase. The pronunciation of this syllable leaves no room for
            sound ambiguity.</p>
        <p class="mb-28 text-justify">The principle of the <span class='MaCuSi'>MaCuSi</span> is to have only 85 words. With the arrangement of these 85 words, it is
            theoretically possible to generate over 377 billion different words with one to six syllables. The
            general idea is not to have to learn anything other than the 85 basic words but to understand or
            discover the possible and logical combinations, to push the limits of language to serve as a means
            of communication between speakers of different languages.</p>
        <p class="mb-28 text-justify">From a grammatical point of view, the <span class='MaCuSi'>MaCuSi</span> aims to keep only what is essential and is characterized
            by a lack of conjugation, gender for nouns, complicated rules, exceptions, particles, etc.</p>
        <h3 class="h3-title mb-28">Advantages</h3>
        <p class="mb-28 text-justify">The first, and not least, advantage of this language is that you only need to learn the 85
            vocabulary words. This allows you to learn the language in just two days.</p>
        <p class="mb-28 text-justify">The second advantage of this language is that it retains the modern Latin alphabet, which is
            known by over 70% of the world's population. Indeed, many invented languages use a new alphabet
            that either includes too many signs or has a non-obvious logic.</p>
        <p class="mb-28 text-justify">The third advantage is that you can use <span class='MaCuSi'>MaCuSi</span> from any language that uses the modern Latin
            alphabet. You just need to have the translation of the 85 basic words and switch to Subject - Verb -
            Complement construction for languages that do not use this type of construction.</p>
        <div class="container">
            <div class="row" style="margin-left: -24px; margin-right: -24px">
                <div class="col">
                    <h3 class="h3-title mb-28">Writing System</h3>
                    <p class="mb-28 text-justify">Each of the 85 words consists of a consonant written in uppercase followed by a vowel
                        written in lowercase. Example: Ba, Ce, Di, Fo, Gu...</p>
                </div>
                <div class="col">
                    <h3 class="h3-title mb-28">Phonology</h3>
                    <p class="mb-28 text-justify">There are no real constraints on how to pronounce the sounds. Bu can be pronounced
                        Bu or Bou... Be can be pronounced Be or Bé. Since there are only 22 phonemes, there is no
                        risk of confusion in pronunciation.</p>
                </div>
            </div>
        </div>
        <h3 class="h3-title mb-28">In Summary</h3>
        <p>MaCuSi is :</p>
        <ul>
            <li>An auxiliary language designed to be simple to facilitate communication;</li>
            <li>Logically designed with reasoning and without irregularities;</li>
            <li>All words are constructed using a reduced number
                of roots that group together to form words;</li>
            <li>Does not draw its vocabulary from an existing language.</li>
        </ul>
    @elseif(app()->getLocale() == 'it')
        @section('description', 'Il MaCuSi è una ideolinguaggio minimalista a livello fonologico e grammaticale, ma non a livello lessicale. Infatti, molte lingue costruite sono incentrate su un singolo tema. Il è stato progettato per consentire la generazione di tutte le parole di una lingua.')
        <h3 class="h3-title mb-28 mt-50">Introduzione</h3>
        <p class="mb-28 text-justify">Il <span class='MaCuSi'>MaCuSi</span> è una ideolinguaggio minimalista a livello fonologico e grammaticale,
            ma non a livello lessicale. Infatti, molte lingue costruite sono incentrate su un singolo tema. Il
            <span class='MaCuSi'>MaCuSi</span> è stato progettato per consentire la generazione di tutte le parole di una lingua.</p>
        <p class="mb-28 text-justify">Dal punto di vista fonologico, il <span class='MaCuSi'>MaCuSi</span> utilizza diciassette consonanti (b, c, d, f, g, j, l, m, n, p, r, s, t, v, w,
            x, z) e cinque vocali (a, e, i, o, u). Una sillaba è composta da una consonante scritta in
            maiuscolo seguita da una vocale scritta in minuscolo. La pronuncia di questa sillaba non lascia spazio a
            ambiguità sonora.</p>
        <p class="mb-28 text-justify">Il principio del <span class='MaCuSi'>MaCuSi</span> è avere solo 85 parole. Con l'organizzazione di queste 85 parole, è
            teoricamente possibile generare oltre 377 miliardi di parole diverse da una a sei sillabe. L'idea generale è
            non dover imparare nient'altro che le 85 parole di base ma capire o scoprire le combinazioni possibili e
            logiche, spingere i limiti del linguaggio per servire come mezzo di comunicazione tra parlanti di
            lingue diverse.</p>
        <p class="mb-28 text-justify">Dal punto di vista grammaticale, il <span class='MaCuSi'>MaCuSi</span> mira a mantenere solo ciò che è essenziale e si caratterizza
            per la mancanza di coniugazione, genere per i sostantivi, regole complicate, eccezioni, particelle, ecc.</p>
        <h3 class="h3-title mb-28">Vantaggi</h3>
        <p class="mb-28 text-justify">Il primo, e non ultimo, vantaggio di questa lingua è che è sufficiente imparare solo le 85
            parole del vocabolario. Questo permette di imparare la lingua in soli due giorni.</p>
        <p class="mb-28 text-justify">Il secondo vantaggio di questa lingua è che mantiene l'alfabeto latino moderno, che è
            conosciuto da oltre il 70% della popolazione mondiale. Infatti, molte lingue inventate utilizzano un
            nuovo alfabeto che comprende troppi segni o ha una logica non evidente.</p>
        <p class="mb-28 text-justify">Il terzo vantaggio è che puoi utilizzare <span class='MaCuSi'>MaCuSi</span> da qualsiasi lingua che utilizza l'alfabeto latino
            moderno. Devi solo avere la traduzione delle 85 parole di base e passare alla costruzione Soggetto -
            Verbo - Complemento per le lingue che non utilizzano questo tipo di costruzione.</p>
        <div class="container">
            <div class="row" style="margin-left: -24px; margin-right: -24px">
                <div class="col">
                    <h3 class="h3-title mb-28">Sistema di Scrittura</h3>
                    <p class="mb-28 text-justify">Ciascuna delle 85 parole è composta da una consonante scritta in maiuscolo seguita da una vocale
                        scritta in minuscolo. Esempio: Ba, Ce, Di, Fo, Gu...</p>
                </div>
                <div class="col">
                    <h3 class="h3-title mb-28">Fonologia</h3>
                    <p class="mb-28 text-justify">Non ci sono vincoli reali su come pronunciare i suoni. Bu può essere pronunciato come Bu o Bou... Be può essere pronunciato come Be o Bé. Poiché ci sono solo 22 fonemi, non vi è alcun rischio di confusione nella pronuncia.</p>
                </div>
            </div>
        </div>
        <h3 class="h3-title mb-28">In Sintesi</h3>
        <p>MaCuSi è un linguaggio :</p>
        <ul>
            <li>Ausiliario progettato per essere semplice per facilitare la comunicazione;</li>
            <li>Logica progettata con ragionamento e senza irregolarità;</li>
            <li>Tutte le parole sono costruite utilizzando un numero
                ridotto di radici che si raggruppano per formare le parole;</li>
            <li>Non attinge al suo vocabolario da una lingua esistente.</li>
        </ul>
    @elseif(app()->getLocale() == 'de')
        @section('description', 'Das MaCuSi ist eine minimalistische Ideosprache in Bezug auf Phonetik und Grammatik, aber nicht lexikalisch. Viele konstruierte Sprachen sind auf ein einziges Thema ausgerichtet. Das MaCuSi wurde entwickelt, um die Generierung aller Wörter einer Sprache zu ermöglichen.')
        <h3 class="h3-title mb-28 mt-50">Einführung</h3>
        <p class="mb-28 text-justify">Das <span class='MaCuSi'>MaCuSi</span> ist eine minimalistische Ideosprache in Bezug auf Phonetik und Grammatik,
            aber nicht lexikalisch. Viele konstruierte Sprachen sind auf ein einziges Thema ausgerichtet. Das
            <span class='MaCuSi'>MaCuSi</span> wurde entwickelt, um die Generierung aller Wörter einer Sprache zu ermöglichen.</p>
        <p class="mb-28 text-justify">Phonetisch verwendet das <span class='MaCuSi'>MaCuSi</span> siebzehn Konsonanten (b, c, d, f, g, j, l, m, n, p, r, s, t, v, w,
            x, z) und fünf Vokale (a, e, i, o, u). Eine Silbe besteht aus einem in Großbuchstaben geschriebenen Konsonanten, gefolgt von einem in Kleinbuchstaben geschriebenen Vokal. Die Aussprache dieser Silbe lässt keinen Raum für
            klangliche Mehrdeutigkeit.</p>
        <p class="mb-28 text-justify">Das Prinzip des <span class='MaCuSi'>MaCuSi</span> besteht darin, nur 85 Wörter zu haben. Mit der Anordnung dieser 85 Wörter ist es theoretisch möglich, über 377 Milliarden verschiedene Wörter mit ein bis sechs Silben zu generieren. Die
            allgemeine Idee besteht darin, nichts anderes als die 85 Grundwörter lernen zu müssen, sondern die möglichen und logischen Kombinationen zu verstehen oder zu entdecken, die Grenzen der Sprache zu erweitern, um als Kommunikationsmittel zwischen Sprechern verschiedener Sprachen zu dienen.</p>
        <p class="mb-28 text-justify">Aus grammatikalischer Sicht zielt das <span class='MaCuSi'>MaCuSi</span> darauf ab, nur das Wesentliche zu bewahren und zeichnet sich durch ein Fehlen von Konjugation, Geschlecht für Nomen, komplizierten Regeln, Ausnahmen, Partikeln usw. aus.</p>
        <h3 class="h3-title mb-28">Vorteile</h3>
        <p class="mb-28 text-justify">Der erste und nicht unwesentliche Vorteil dieser Sprache besteht darin, dass man nur die 85 Vokabeln lernen muss. Dadurch kann man die Sprache in nur zwei Tagen erlernen.</p>
        <p class="mb-28 text-justify">Der zweite Vorteil dieser Sprache besteht darin, dass sie das moderne lateinische Alphabet beibehält, das von über 70% der Weltbevölkerung bekannt ist. Viele erfundene Sprachen verwenden ein neues Alphabet, das entweder zu viele Zeichen enthält oder eine nicht offensichtliche Logik aufweist.</p>
        <p class="mb-28 text-justify">Der dritte Vorteil besteht darin, dass man <span class='MaCuSi'>MaCuSi</span> aus jeder Sprache verwenden kann, die das moderne lateinische Alphabet verwendet. Man benötigt lediglich die Übersetzung der 85 Grundwörter und wechselt zur Subjekt-Verb-Objekt-Konstruktion für Sprachen, die diese Art von Konstruktion nicht verwenden.</p>
        <div class="container">
            <div class="row" style="margin-left: -24px; margin-right: -24px">
                <div class="col">
                    <h3 class="h3-title mb-28">Schreibsystem</h3>
                    <p class="mb-28 text-justify">Jedes der 85 Wörter besteht aus einem in Großbuchstaben geschriebenen Konsonanten, gefolgt von einem in Kleinbuchstaben geschriebenen Vokal. Beispiel: Ba, Ce, Di, Fo, Gu...</p>
                </div>
                <div class="col">
                    <h3 class="h3-title mb-28">Phonologie</h3>
                    <p class="mb-28 text-justify">Es gibt keine echten Einschränkungen bei der Aussprache der Laute. Bu kann als Bu oder Bou ausgesprochen werden... Be kann als Be oder Bé ausgesprochen werden. Da es nur 22 Phoneme gibt, besteht keine Gefahr einer Verwechslung bei der Aussprache.</p>
                </div>
            </div>
        </div>
        <h3 class="h3-title mb-28">Zusammenfassung</h3>
        <p>MaCuSi ist eine Hilfssprache : </p>
        <ul>
            <li>Die einfach gestaltet ist, um die Kommunikation zu erleichtern;</li>
            <li>Logisch gestaltet mit Vernunft und ohne Unregelmäßigkeiten;</li>
            <li>Alle Wörter werden unter Verwendung einer begrenzten Anzahl von Wurzeln konstruiert, die sich zu Wörtern zusammenschließen;</li>
            <li>Greift nicht auf den Wortschatz einer bestehenden Sprache zurück.</li>
        </ul>
    @endif

@endsection

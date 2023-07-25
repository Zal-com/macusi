@extends('layouts.app')
@section('content')
    <h1 class="h3-title">Termini di Utilizzo</h1>

    <p>Ultimo aggiornamento: 25 luglio 2023</p>

    <p class="text-justify">Benvenuti su {{config('app.name')}}. Utilizzando il nostro sito web, accettate di rispettare i presenti termini di utilizzo. Vi preghiamo di leggerli attentamente prima di navigare sul nostro sito. Se non accettate questi termini, vi preghiamo di non utilizzare il nostro sito.</p>

    <ul>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Utilizzo del Sito</h4>
            <p class="text-justify">Siete autorizzati a utilizzare {{config('app.name')}} per scopi personali e non commerciali, a condizione che siate conformi a questi termini di utilizzo. Non potete utilizzare il sito in modo illegale o in modo tale da danneggiare, disabilitare, sovraccaricare o alterare il suo funzionamento.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Contenuto del Sito</h4>
            <p class="text-justify">Tutti i contenuti presenti su {{config('app.name')}}, inclusi testi, immagini, video, grafiche, loghi e marchi, sono di proprietà esclusiva di {{config('app.name')}} o dei suoi licenzianti. Non siete autorizzati a riprodurre, distribuire, modificare o utilizzare tali contenuti senza il nostro preventivo consenso scritto.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Account Utente</h4>
            <p class="text-justify">Alcuni servizi o funzionalità di {{config('app.name')}} potrebbero richiedere la creazione di un account utente. Siete responsabili della riservatezza delle vostre credenziali di accesso e di tutte le attività svolte con il vostro account. Vi impegnate a informarci immediatamente di qualsiasi uso non autorizzato del vostro account.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Link a Siti di Terze Parti</h4>
            <p class="text-justify">Il nostro sito potrebbe contenere link a siti web di terze parti. Questi link sono forniti esclusivamente per vostra comodità e non approviamo né controlliamo i contenuti di tali siti. Non saremo responsabili dei contenuti, dei prodotti o dei servizi offerti su questi siti di terze parti.
            </p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Esclusione di Responsabilità</h4>
            <p class="text-justify">{{config('app.name')}} declina ogni responsabilità per danni diretti, indiretti, speciali, consequenziali o punitivi derivanti dall'uso o dall'incapacità di utilizzare il sito o qualsiasi contenuto o servizio ottenuto tramite il sito. Tutte le informazioni e i servizi sono forniti "così come sono" e "come disponibili".</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Modifica dei Termini</h4>
            <p class="text-justify">Ci riserviamo il diritto di modificare questi termini di utilizzo in qualsiasi momento. Eventuali modifiche saranno pubblicate in questa pagina con la data dell'ultimo aggiornamento. Continuando a utilizzare il sito dopo tali modifiche, accettate i termini rivisti.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Legge Applicabile</h4>
            <p class="text-justify">Questi termini di utilizzo sono regolati dalle leggi del Belgio e qualsiasi controversia relativa all'utilizzo di {{config('app.name')}} sarà sottoposta alla giurisdizione esclusiva dei tribunali competenti di Bruxelles.</p>
        </li>
    </ul>

    <p class="text-justify">Se avete domande riguardanti questi termini di utilizzo, vi preghiamo di contattarci all'indirizzo seguente: contact@macusi.be.</p>
@endsection

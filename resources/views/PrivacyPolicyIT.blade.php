@extends('layouts.app')

@section('content')
    <h1 class="h3-title">Informativa sulla Privacy</h1>

    <p>Ultimo aggiornamento: 25 luglio 2023</p>

    <p class="text-justify">Benvenuti su {{ config('app.name') }}, attribuiamo grande importanza alla protezione della tua privacy. Questa informativa sulla privacy spiega come raccogliamo, utilizziamo e proteggiamo le tue informazioni personali in conformità alle leggi applicabili, inclusa la Regolamentazione Generale sulla Protezione dei Dati (GDPR) in vigore nell'Unione Europea e la legislazione sulla protezione dei dati in Belgio.</p>

    <ul class="text-justify">
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Raccolta dei dati</h4>
            <p>Quando utilizzi {{ config('app.name') }}, potremmo raccogliere alcune informazioni personali su di te, inclusi il tuo nome, l'indirizzo e-mail e la tua nazionalità. Queste informazioni vengono raccolte solo nel rispetto delle basi giuridiche e dei principi del GDPR e delle leggi sulla protezione dei dati in vigore in Belgio.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Utilizzo dei dati</h4>
            <p>Le informazioni personali che raccogliamo vengono utilizzate per fornirti i servizi e le funzionalità di {{ config('app.name') }}. Potremmo utilizzare anche questi dati per personalizzare la tua esperienza e inviarti informazioni relative ai nostri prodotti, servizi e promozioni, previo tuo consenso, quando richiesto dalla legge.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Conservazione dei dati</h4>
            <p>Conserviamo i tuoi dati personali solo per il tempo necessario alle finalità per cui sono stati raccolti, in conformità ai requisiti di legge. Implementiamo misure di sicurezza adeguate per proteggere le tue informazioni personali da perdite, accessi non autorizzati, divulgazione, alterazione o distruzione.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Condivisione dei dati</h4>
            <p>Non vendiamo, scambiamo o affittiamo le tue informazioni personali a terzi, a meno che non otteniamo il tuo consenso preventivo o quando richiesto dalla legge. Potremmo condividere le tue informazioni con fornitori di servizi terzi che ci aiutano a gestire il nostro sito web e a fornire i nostri servizi, previa sottoscrizione da parte di tali terzi dell'impegno alla riservatezza e alla sicurezza dei tuoi dati.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">I tuoi diritti</h4>
            <p>Hai alcuni diritti riguardanti i tuoi dati personali. Puoi accedere ai tuoi dati, correggerli, cancellarli o opporsi al loro trattamento contattandoci tramite i recapiti forniti di seguito. Si prega di notare che alcuni di questi diritti possono essere limitati in determinate circostanze in conformità alla legge applicabile.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Cookie e tecnologie simili</h4>
            <p>Utilizziamo cookie e altre tecnologie simili per migliorare la tua esperienza su {{ config('app.name') }}. Puoi configurare il tuo browser per rifiutare tutti i cookie o per essere avvisato quando un cookie viene inviato. Tuttavia, tieni presente che alcune funzionalità del nostro sito potrebbero non funzionare correttamente se i cookie sono disattivati.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Modifiche all'informativa sulla privacy</h4>
            <p>Ci riserviamo il diritto di modificare questa informativa sulla privacy in qualsiasi momento. Eventuali modifiche saranno pubblicate su questa pagina con la data dell'ultimo aggiornamento. È tua responsabilità consultare regolarmente questa informativa sulla privacy per prendere conoscenza di eventuali modifiche.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Contattaci</h4>
            <p>Se hai domande, preoccupazioni o richieste riguardanti questa informativa sulla privacy o le nostre pratiche in materia di protezione dei dati, contattaci all'indirizzo seguente: contact@macusi.be</p>
        </li>
    </ul>
@endsection

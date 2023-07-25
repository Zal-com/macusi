@extends('layouts.app')

@section('content')
    <h1 class="h3-title">Datenschutzrichtlinie</h1>

    <p>Zuletzt aktualisiert: 25. Juli 2023</p>

    <p class="text-justify">Willkommen auf {{ config('app.name') }}, wir legen großen Wert auf den Schutz Ihrer Privatsphäre. Diese Datenschutzrichtlinie erläutert, wie wir Ihre personenbezogenen Daten gemäß geltenden Gesetzen, einschließlich der Datenschutz-Grundverordnung (DSGVO) der Europäischen Union und des Datenschutzrechts in Belgien, erfassen, verwenden und schützen.</p>

    <ul class="text-justify">
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Datenerfassung</h4>
            <p>Wenn Sie {{ config('app.name') }} nutzen, erfassen wir möglicherweise bestimmte personenbezogene Daten von Ihnen, einschließlich Ihres Namens, Ihrer E-Mail-Adresse und Ihrer Nationalität. Diese Informationen werden nur gemäß den rechtlichen Grundlagen und Prinzipien der DSGVO und der geltenden Datenschutzgesetze in Belgien erfasst.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Datennutzung</h4>
            <p>Die von uns erfassten personenbezogenen Daten werden verwendet, um Ihnen die Dienste und Funktionen von {{ config('app.name') }} bereitzustellen. Wir können diese Daten auch verwenden, um Ihre Erfahrung zu personalisieren und Ihnen Informationen zu unseren Produkten, Dienstleistungen und Promotionen zuzusenden, sofern Ihre vorherige Einwilligung erforderlich ist und dies durch Gesetze vorgeschrieben ist.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Datenspeicherung</h4>
            <p>Wir speichern Ihre personenbezogenen Daten nur so lange wie nötig für die Zwecke, für die sie erfasst wurden, gemäß den gesetzlichen Anforderungen. Wir setzen angemessene Sicherheitsmaßnahmen ein, um Ihre personenbezogenen Informationen vor Verlust, unbefugtem Zugriff, Offenlegung, Änderung oder Zerstörung zu schützen.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Datenaustausch</h4>
            <p>Wir verkaufen, tauschen oder vermieten Ihre personenbezogenen Daten nicht an Dritte, es sei denn, wir erhalten Ihre vorherige Einwilligung oder es ist gesetzlich vorgeschrieben. Wir können Ihre Informationen mit Drittanbieter-Dienstleistern teilen, die uns bei der Betreibung unserer Website und der Bereitstellung unserer Dienstleistungen unterstützen, vorausgesetzt, dass sich diese Dritten zur Vertraulichkeit und Sicherheit Ihrer Daten verpflichten.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Ihre Rechte</h4>
            <p>Sie haben bestimmte Rechte bezüglich Ihrer personenbezogenen Daten. Sie können auf Ihre Daten zugreifen, sie korrigieren, löschen oder der Verarbeitung Ihrer Daten widersprechen, indem Sie uns über die unten angegebenen Kontaktdaten kontaktieren. Bitte beachten Sie, dass einige dieser Rechte unter bestimmten Umständen gemäß geltendem Recht eingeschränkt sein können.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Cookies und ähnliche Technologien</h4>
            <p>Wir verwenden Cookies und andere ähnliche Technologien, um Ihre Erfahrung auf {{ config('app.name') }} zu verbessern. Sie können Ihren Browser so konfigurieren, dass er alle Cookies ablehnt oder Sie warnt, wenn ein Cookie gesendet wird. Bitte beachten Sie jedoch, dass einige Funktionen unserer Website möglicherweise nicht ordnungsgemäß funktionieren, wenn Cookies deaktiviert sind.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Änderungen der Datenschutzrichtlinie</h4>
            <p>Wir behalten uns das Recht vor, diese Datenschutzrichtlinie jederzeit zu ändern. Änderungen werden auf dieser Seite mit dem Datum der letzten Aktualisierung veröffentlicht. Es liegt in Ihrer Verantwortung, diese Datenschutzrichtlinie regelmäßig auf etwaige Änderungen zu überprüfen.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Kontakt</h4>
            <p>Bei Fragen, Bedenken oder Anfragen bezüglich dieser Datenschutzrichtlinie oder unserer Datenschutzpraktiken können Sie uns unter folgender Adresse kontaktieren: contact@macusi.be</p>
        </li>
    </ul>
@endsection

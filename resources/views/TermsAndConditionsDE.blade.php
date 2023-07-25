@extends('layouts.app')
@section('content')
    <h1 class="h3-title">Nutzungsbedingungen</h1>

    <p>Zuletzt aktualisiert: 25. Juli 2023</p>

    <p class="text-justify">Willkommen auf {{config('app.name')}}. Durch die Nutzung unserer Website stimmen Sie diesen Nutzungsbedingungen zu. Bitte lesen Sie sie sorgfältig, bevor Sie unsere Website durchsuchen. Wenn Sie diesen Bedingungen nicht zustimmen, verwenden Sie unsere Website bitte nicht.</p>

    <ul>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Website-Nutzung</h4>
            <p class="text-justify">Sie sind berechtigt, {{config('app.name')}} für persönliche und nichtkommerzielle Zwecke zu nutzen, unter der Voraussetzung, dass Sie diese Nutzungsbedingungen einhalten. Sie dürfen die Website nicht in rechtswidriger Weise oder auf eine Weise nutzen, die den Betrieb der Website beschädigen, deaktivieren, überlasten oder verändern könnte.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Website-Inhalte</h4>
            <p class="text-justify">Alle Inhalte auf {{config('app.name')}}, einschließlich Texte, Bilder, Videos, Grafiken, Logos und Marken, sind das ausschließliche Eigentum von {{config('app.name')}} oder seinen Lizenzgebern. Sie sind nicht berechtigt, diese Inhalte ohne unsere vorherige schriftliche Zustimmung zu reproduzieren, zu verteilen, zu modifizieren oder zu nutzen.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Benutzerkonten</h4>
            <p class="text-justify">Bestimmte Dienste oder Funktionen von {{config('app.name')}} erfordern die Erstellung eines Benutzerkontos. Sie sind dafür verantwortlich, die Vertraulichkeit Ihrer Kontoinformationen zu wahren und alle Aktivitäten zu melden, die unter Ihrem Konto stattfinden. Sie verpflichten sich, uns unverzüglich über jede unbefugte Nutzung Ihres Kontos zu informieren.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Links zu Websites Dritter</h4>
            <p class="text-justify">Unsere Website kann Links zu Websites Dritter enthalten. Diese Links dienen ausschließlich Ihrer Bequemlichkeit, und wir befürworten oder kontrollieren den Inhalt dieser Websites nicht. Wir übernehmen keine Verantwortung für den Inhalt, die Produkte oder Dienstleistungen, die auf diesen Websites Dritter angeboten werden.
            </p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Haftungsausschluss</h4>
            <p class="text-justify">{{config('app.name')}} lehnt jegliche Haftung für direkte, indirekte, besondere, Folge- oder Strafschäden ab, die sich aus der Nutzung oder Unfähigkeit zur Nutzung der Website oder aus Inhalten oder Diensten ergeben, die über die Website erhalten wurden. Alle Informationen und Dienste werden "wie besehen" und "je nach Verfügbarkeit" bereitgestellt.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Änderung der Bedingungen</h4>
            <p class="text-justify">Wir behalten uns das Recht vor, diese Nutzungsbedingungen jederzeit zu ändern. Jegliche Änderungen werden auf dieser Seite mit dem Datum der letzten Aktualisierung veröffentlicht. Durch die fortgesetzte Nutzung der Website nach solchen Änderungen akzeptieren Sie die überarbeiteten Bedingungen.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Anwendbares Recht</h4>
            <p class="text-justify">Diese Nutzungsbedingungen unterliegen den Gesetzen Belgiens, und alle Streitigkeiten im Zusammenhang mit der Nutzung von {{config('app.name')}} unterliegen der ausschließlichen Gerichtsbarkeit der zuständigen Gerichte in Brüssel.</p>
        </li>
    </ul>

    <p class="text-justify">Wenn Sie Fragen zu diesen Nutzungsbedingungen haben, kontaktieren Sie uns bitte unter folgender Adresse: contact@macusi.be.</p>
@endsection

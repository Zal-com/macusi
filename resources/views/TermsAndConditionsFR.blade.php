@extends('layouts.app')
@section('content')
    <h1 class="h3-title">Conditions d'utilisation</h1>

    <p>Dernière mise à jour : 25 juillet 2023</p>

    <p class="text-justify">Bienvenue sur {{config('app.name')}}. En utilisant notre site Web, vous acceptez de vous conformer aux présentes conditions d'utilisation. Veuillez les lire attentivement avant de naviguer sur notre site. Si vous n'acceptez pas ces conditions, veuillez ne pas utiliser notre site.</p>

    <ul>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Utilisation du site</h4>
            <p class="text-justify">Vous êtes autorisé à utiliser {{config('app.name')}} à des fins personnelles et non commerciales, sous réserve du respect de ces conditions d'utilisation. Vous ne pouvez pas utiliser le site de manière illégale ou d'une manière qui pourrait endommager, désactiver, surcharger ou altérer le fonctionnement du site.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Contenu du site</h4>
            <p class="text-justify">Tous les contenus présents sur {{config('app.name')}}, y compris les textes, les images, les vidéos, les graphiques, les logos et les marques, sont la propriété exclusive de {{config('app.name')}} ou de ses concédants de licence. Vous n'êtes pas autorisé à reproduire, distribuer, modifier ou utiliser ces contenus sans notre consentement écrit préalable.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Comptes utilisateur</h4>
            <p class="text-justify">Certains services ou fonctionnalités de {{config('app.name')}} peuvent nécessiter la création d'un compte utilisateur. Vous êtes responsable de préserver la confidentialité de vos informations d'identification de compte et de toutes les activités qui se produisent sous votre compte. Vous vous engagez à nous informer immédiatement de toute utilisation non autorisée de votre compte.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Liens vers des tiers</h4>
            <p class="text-justify">Notre site peut contenir des liens vers des sites Web tiers. Ces liens sont fournis uniquement pour votre commodité, et nous n'avalisons ni ne contrôlons le contenu de ces sites. Nous ne serons pas tenus responsables du contenu, des produits ou des services proposés sur ces sites tiers.
            </p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Exclusion de responsabilité</h4>
            <p class="text-justify">{{config('app.name')}} décline toute responsabilité quant aux dommages directs, indirects, spéciaux, consécutifs ou punitifs résultant de l'utilisation ou de l'impossibilité d'utiliser le site ou de tout contenu ou service obtenu par le biais du site. Toutes les informations et services sont fournis "tels quels" et "selon disponibilité".</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Modification des conditions</h4>
            <p class="text-justify">Nous nous réservons le droit de modifier ces conditions d'utilisation à tout moment. Toute modification sera publiée sur cette page avec la date de la dernière mise à jour. En continuant à utiliser le site après de telles modifications, vous acceptez les conditions révisées.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Loi applicable</h4>
            <p class="text-justify">Ces conditions d'utilisation sont régies par les lois en vigueur en Belgique et tout litige lié à l'utilisation de {{config('app.name')}} sera soumis à la juridiction exclusive des tribunaux compétents de Bruxelles.</p>
        </li>
    </ul>

    <p class="text-justify">Si vous avez des questions concernant ces conditions d'utilisation, veuillez nous contacter à l'adresse suivante : contact@macusi.be.</p>

@endsection

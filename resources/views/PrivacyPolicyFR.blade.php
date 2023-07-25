@extends('layouts.app')

@section('content')
<h1 class="h3-title"> Politique de confidentialité </h1>

<p>Dernière mise à jour : 25 juillet 2023</p>

<p class="text-justify">Bienvenue sur {{ config('app.name') }}, nous attachons une grande importance à la protection de votre vie privée. Cette politique de confidentialité explique comment nous collectons, utilisons et protégeons vos informations personnelles conformément aux lois applicables, notamment le Règlement général sur la protection des données (RGPD) en vigueur dans l'Union européenne et la législation sur la protection des données en Belgique.</p>

<ul class="text-justify">
    <li class="list-unstyled my-4">
        <h4 class="h3-title">Collecte de données</h4>
        <p>Lorsque vous utilisez {{ config('app.name') }}, nous pouvons collecter certaines informations personnelles vous concernant, y compris votre nom, prénom, adresse e-mail et votre nationalité. Ces informations sont collectées uniquement dans le respect des bases légales et des principes du RGPD et des lois de protection des données en vigueur en Belgique.</p>
    </li>
    <li class="list-unstyled my-4">
        <h4 class="h3-title">Utilisation des données</h4>
        <p>Les informations personnelles que nous collectons sont utilisées dans le but de vous fournir les services et les fonctionnalités de {{ config('app.name') }}. Nous pouvons également utiliser ces données pour personnaliser votre expérience et vous envoyer des informations relatives à nos produits, services et promotions, sous réserve de votre consentement préalable, lorsque cela est requis par la loi.</p>
    </li>
    <li class="list-unstyled my-4">
        <h4 class="h3-title">Conservation des données</h4>
        <p>Nous ne conserverons vos données personnelles que pendant la durée nécessaire aux fins pour lesquelles elles ont été collectées, conformément aux exigences légales. Nous mettons en place des mesures de sécurité appropriées pour protéger vos informations personnelles contre toute perte, accès non autorisé, divulgation, altération ou destruction.</p>
    </li>
    <li class="list-unstyled my-4">
        <h4 class="h3-title">Partage des données</h4>
        <p>Nous ne vendons, n'échangeons ni ne louons vos informations personnelles à des tiers, sauf si nous obtenons votre consentement préalable ou si cela est requis par la loi. Nous pouvons partager vos informations avec des prestataires de services tiers qui nous aident à exploiter notre site Web et à fournir nos services, sous réserve de l'engagement de ces tiers à respecter la confidentialité et la sécurité de vos données.</p>
    </li>
    <li class="list-unstyled my-4">
        <h4 class="h3-title">Vos droits</h4>
        <p>Vous avez certains droits en ce qui concerne vos données personnelles. Vous pouvez accéder à vos données, les rectifier, les supprimer ou vous opposer à leur traitement en nous contactant via les coordonnées fournies ci-dessous. Veuillez noter que certains de ces droits peuvent être limités dans certaines circonstances conformément à la loi applicable.</p>
    </li>
    <li class="list-unstyled my-4">
        <h4 class="h3-title">Cookies et technologies similaires</h4>
        <p>Nous utilisons des cookies et d'autres technologies similaires pour améliorer votre expérience sur {{ config('app.name') }}. Vous pouvez configurer votre navigateur pour refuser tous les cookies ou vous alerter lorsqu'un cookie est envoyé. Cependant, veuillez noter que certaines fonctionnalités de notre site peuvent ne pas fonctionner correctement si les cookies sont désactivés.</p>
    </li>
    <li class="list-unstyled my-4">
        <h4 class="h3-title">Modifications de la politique de confidentialité</h4>
        <p>Nous nous réservons le droit de modifier cette politique de confidentialité à tout moment. Toute modification sera publiée sur cette page avec la date de la dernière mise à jour. Il est de votre responsabilité de consulter régulièrement cette politique de confidentialité pour prendre connaissance des éventuelles modifications.</p>
    </li>
    <li class="list-unstyled my-4">
        <h4 class="h3-title">Nous contacter</h4>
        <p>Si vous avez des questions, des préoccupations ou des demandes concernant cette politique de confidentialité ou nos pratiques en matière de protection des données, veuillez nous contacter à l'adresse suivante : contact@macusi.be</p>
    </li>
</ul>
@endsection

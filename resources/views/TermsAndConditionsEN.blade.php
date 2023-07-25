@extends('layouts.app')
@section('content')
    <h1 class="h3-title">Terms of Use</h1>
    <p>Last updated: July 25, 2023</p>
    <p class="text-justify">Welcome to {{config('app.name')}}. By using our website, you agree to comply with these terms of use. Please read them carefully before browsing our site. If you do not agree to these terms, please do not use our site.</p>
    <ul>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Site Usage</h4>
            <p class="text-justify">You are authorized to use {{config('app.name')}} for personal and non-commercial purposes, subject to compliance with these terms of use. You may not use the site in an illegal manner or in a way that could damage, disable, overload, or alter the site's operation.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Site Content</h4>
            <p class="text-justify">All content on {{config('app.name')}}, including texts, images, videos, graphics, logos, and trademarks, is the exclusive property of {{config('app.name')}} or its licensors. You are not authorized to reproduce, distribute, modify, or use this content without our prior written consent.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">User Accounts</h4>
            <p class="text-justify">Certain services or features of {{config('app.name')}} may require the creation of a user account. You are responsible for maintaining the confidentiality of your account credentials and all activities that occur under your account. You agree to inform us immediately of any unauthorized use of your account.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Links to Third-Party Sites</h4>
            <p class="text-justify">Our site may contain links to third-party websites. These links are provided solely for your convenience, and we do not endorse or control the content of these sites. We will not be held responsible for the content, products, or services offered on these third-party sites.
            </p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Disclaimer of Liability</h4>
            <p class="text-justify">{{config('app.name')}} disclaims any liability for direct, indirect, special, consequential, or punitive damages resulting from the use or inability to use the site or any content or service obtained through the site. All information and services are provided "as is" and "as available".</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Modification of Terms</h4>
            <p class="text-justify">We reserve the right to modify these terms of use at any time. Any changes will be posted on this page with the date of the last update. By continuing to use the site after such modifications, you accept the revised terms.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Applicable Law</h4>
            <p class="text-justify">These terms of use are governed by the laws of Belgium, and any dispute related to the use of {{config('app.name')}} will be subject to the exclusive jurisdiction of the competent courts of Brussels.</p>
        </li>
    </ul>
    <p class="text-justify">If you have any questions regarding these terms of use, please contact us at the following address: contact@macusi.be.</p>

@endsection

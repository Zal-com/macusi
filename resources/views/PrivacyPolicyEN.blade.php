@extends('layouts.app')

@section('content')
    <h1 class="h3-title">Privacy Policy</h1>

    <p>Last updated: July 25, 2023</p>

    <p class="text-justify">Welcome to {{ config('app.name') }}, we value the protection of your privacy. This privacy policy explains how we collect, use, and protect your personal information in accordance with applicable laws, including the General Data Protection Regulation (GDPR) in force in the European Union and data protection legislation in Belgium.</p>

    <ul class="text-justify">
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Data Collection</h4>
            <p>When you use {{ config('app.name') }}, we may collect certain personal information about you, including your name, email address, and nationality. This information is collected only in compliance with the legal bases and principles of the GDPR and data protection laws in effect in Belgium.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Use of Data</h4>
            <p>The personal information we collect is used to provide you with the services and features of {{ config('app.name') }}. We may also use this data to personalize your experience and send you information about our products, services, and promotions, subject to your prior consent when required by law.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Data Retention</h4>
            <p>We will only retain your personal data for as long as necessary for the purposes for which it was collected, in accordance with legal requirements. We implement appropriate security measures to protect your personal information against loss, unauthorized access, disclosure, alteration, or destruction.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Data Sharing</h4>
            <p>We do not sell, trade, or rent your personal information to third parties unless we obtain your prior consent or as required by law. We may share your information with third-party service providers who assist us in operating our website and providing our services, subject to these third parties' commitment to confidentiality and data security.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Your Rights</h4>
            <p>You have certain rights regarding your personal data. You can access, correct, delete, or object to the processing of your data by contacting us using the contact details provided below. Please note that some of these rights may be limited under certain circumstances in accordance with applicable law.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Cookies and Similar Technologies</h4>
            <p>We use cookies and other similar technologies to enhance your experience on {{ config('app.name') }}. You can configure your browser to refuse all cookies or to alert you when a cookie is sent. However, please note that some features of our site may not function properly if cookies are disabled.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Changes to the Privacy Policy</h4>
            <p>We reserve the right to modify this privacy policy at any time. Any changes will be posted on this page with the date of the last update. It is your responsibility to regularly review this privacy policy for any modifications.</p>
        </li>
        <li class="list-unstyled my-4">
            <h4 class="h3-title">Contact Us</h4>
            <p>If you have any questions, concerns, or requests regarding this privacy policy or our data protection practices, please contact us at the following address: contact@macusi.be</p>
        </li>
    </ul>
@endsection

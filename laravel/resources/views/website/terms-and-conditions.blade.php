@extends('website.include.master')
@section('title')
    Terms & Conditions
@endsection
@section('content')
    <div class="nk-main">

        <!-- START: Breadcrumbs -->
        <div class="nk-gap-1"></div>
        <div class="container">
            <ul class="nk-breadcrumbs">

                <li><a href="{{ route('home') }}">Home</a></li>

                <li>
                    <svg class="svg-inline--fa fa-angle-right fa-w-8" aria-hidden="true" data-prefix="fa"
                        data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                        data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                        </path>
                    </svg><!-- <span class="fa fa-angle-right"></span> -->
                </li>

                <li><a href="#">Terms & Conditions</a></li>

                <li>
                    <svg class="svg-inline--fa fa-angle-right fa-w-8" aria-hidden="true" data-prefix="fa"
                        data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                        data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                        </path>
                    </svg><!-- <span class="fa fa-angle-right"></span> -->
                </li>

                <li><span>Terms & Conditions</span></li>

            </ul>
        </div>
        <div class="nk-gap-1"></div>

        <div class="container">
            <!-- START: Posts FullWidth -->
            <div class="nk-blog-fullwidth">

                <!-- START: Post -->
                <div class="nk-blog-post">
                    <div class="row vertical-gap">
                        <div class="col-12">
                            <div class="nk-gap"></div>
                            <div class="nk-post-text">
                                <p>If you access the {{ env('APP_URL') }} web site application, you agree to these terms of use ("Terms of Use"). This service is owned and managed by {{ env('APP_NAME') }}. (hereafter referred to as "Infinity"). These Terms of Use affect your statutory rights and obligations. If you do not agree that these Terms of Use are binding for you, do not use the site.</p>

                                <h4>Basic Terms</h4>
                                <ul>
                                    <li>You must be at least 13 years old to use the Service.</li>
                                    <li>You may not post violent, nude, partially nude, discriminatory, unlawful, infringing, hateful, pornographic or sexually suggestive photos or other content via the Service.</li>
                                    <li>You must not defame, stalk, bully, abuse, harass, threaten, impersonate or intimidate people or entities and you must not post private or confidential information via the Service.</li>
                                    <li>You must not use domain names or web URLs in your username without prior written consent from Infinity.</li>
                                    <li>You must not interfere or disrupt the Service or servers or networks connected to the Service.</li>
                                    <li>You must not create accounts with the Service through unauthorized means, including but not limited to, by using automated devices.</li>
                                    <li>You are solely responsible for your actions.</li>
                                </ul>

                                <p>Violation of these Terms of Use may, in Infinity's sole discretion, result in termination of your Games account. You understand and agree that Infinity cannot and will not be responsible for the Content posted on the Service and you use the Service at your own risk.</p>

                                <h4>General Conditions</h4>
                                <ul>
                                    <li>We reserve the right to modify or terminate the Service or your access to the Service for any reason, without notice, at any time, and without liability to you.</li>
                                    <li>We reserve the right, in our sole discretion, to change these Terms of Use ("Updated Terms") from time to time.</li>
                                    <li>We reserve the right to force forfeiture of any username for any reason.</li>
                                    <li>We may remove, edit, block, and/or monitor Content or accounts violating these Terms of Use.</li>
                                    <li>Links to third-party websites or features are not controlled or endorsed by Infinity, and interactions with such third parties are solely your responsibility.</li>
                                    <li>You agree that you are responsible for all data charges incurred through use of the Service.</li>
                                </ul>

                                <h4>Rights</h4>
                                <p>Infinity does not claim ownership of any Content that you post on or through the Service. However, you represent and warrant that you have the rights to post such Content and agree to pay any associated fees.</p>
                                <p>The Service contains content owned or licensed by Infinity, protected by intellectual property laws, and you must not exploit it without permission.</p>

                                <h4>Reporting Copyright and Other IP Violations</h4>
                                <p>We respect others' rights and expect you to do the same. Repeated infringement may result in account termination.</p>

                                <h4>Disclaimer of Warranties</h4>
                                <p>The Service is provided "as is" and "as available" without warranties of any kind. Your use is at your own risk.</p>

                                <h4>Territorial Restrictions</h4>
                                <p>The Service may not be available in all locations. We reserve the right to limit access based on geographic areas or jurisdictions.</p>

                                <h4>Contacting Us</h4>
                                <p>If you have questions regarding these Terms of Use, you may contact us using the information provided on the Service.</p>
                                <strong>Email : <a href="mailto:{{ env('APP_EMAIL') }}">{{ env('APP_EMAIL') }}</a> </strong>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Post -->

            </div>
        </div>
    </div>
        @endsection

        @section('script')
        @endsection

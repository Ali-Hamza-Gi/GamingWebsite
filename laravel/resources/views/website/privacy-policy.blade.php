@extends('website.include.master')
@section('title')
    Privacy Policy
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

                <li><a href="#">Privacy Policy</a></li>

                <li>
                    <svg class="svg-inline--fa fa-angle-right fa-w-8" aria-hidden="true" data-prefix="fa"
                        data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                        data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                        </path>
                    </svg><!-- <span class="fa fa-angle-right"></span> -->
                </li>

                <li><span>Privacy Policy</span></li>

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
                                <section>
                                    <p>Welcome to {{ env('APP_URL') }} ("{{ env('APP_NAME') }}"). Allows users to access thousands of games and their related services (the "Service").</p>
                                    <ul>
                                        <li>
                                            This section of the website explains how {{ env('APP_NAME') }} and its affiliates collect, use, share and protect user's information related to the use of the Service.
                                        </li>
                                        <li>
                                            {{ env('APP_NAME') }} collects and uses data in accordance with applicable laws in the US, the EU, or eventually with superior territorial decisions.
                                        </li>
                                        <li>
                                            This policy applies to all visitors, users, and other people using the Service.
                                        </li>
                                    </ul>
                                    <p>{{ env('APP_NAME') }} measures, tracks, and records general behavior of users on the website and in the games in order to detect bugs and improve their products.</p>
                                </section>

                                <section>
                                    <h3>1. Information We Collect</h3>
                                    <p>Based on permission, {{ env('APP_NAME') }} collects the following types of information:</p>

                                    <article>
                                        <h4>1.1 Information collected within a legitimate interest</h4>
                                        <h5>1.1.1 Analytic Tools</h5>
                                        <p>We use third-party analytics tools to help us measure traffic and usage trends for the Service. These tools collect information sent by your device or our Service, including the web pages you visit, add-ons, and other information that assists us in improving the Service. We collect and use this analytics information with analytics information from other Users so that it cannot reasonably be used to identify any particular individual User.</p>

                                        <h5>1.1.2 Browser Storages</h5>
                                        <p>To improve the user's experience, {{ env('APP_NAME') }} uses browser storage in the form of cookies and local storages. An example of the saved data can be the list of games played in the given browser, or recorded scores in the games played. This data is stored only on the client side and does not serve to identify a particular user.</p>
                                        <p>We may ask advertisers or other partners to serve ads or services to your devices, which may use cookies or similar technologies placed by us or the third party.</p>
                                    </article>

                                    <article>
                                        <h4>1.2 Information collected based on user's consent</h4>
                                        <p>By consensus, the user agrees with extension of the authorization to collect and process data with the following additions. The validity period of the consent is 3 years, if the user does not withdraw their consent earlier. Consent also expires by deleting the user's account.</p>

                                        <h5>1.2.1 Analytic Tools</h5>
                                        <p>By consensus, the user extends the collection of the data mentioned in section 1.1.1 about advanced measurement tools for personalized {{ env('APP_NAME') }} content recommendations. This content recommendation can take place through both the web and the ad network.</p>

                                        <h5>1.2.2 Information Provided by the User</h5>
                                        <p>By registering, editing a user account and using {{ env('APP_NAME') }}, the user provides or can provide the following information:</p>
                                        <ul>
                                            <li>Login identifiers: This may be the email address and password, or any data provided by the third party through which the login occurred (Facebook, Google+, VK, GameArter).</li>
                                            <li>Real name and username.</li>
                                            <li>Country of residence and preferred language.</li>
                                            <li>User content in the form of a profile image, comments, reports, and generated gaming content.</li>
                                            <li>Communication between the user and {{ env('APP_NAME') }}.</li>
                                            <li>Devices used by the user and the last access IP address.</li>
                                            <li>Preferred content for the user based on their behavior and activity on the website and in the games.</li>
                                        </ul>

                                        <h5>1.2.3 Device Identifiers</h5>
                                        <p>A device identifier may deliver information to us or to a third-party partner about how you browse and use the Service and may help us or others provide reports or personalized content and ads. Some features of the Service may not function properly if use or availability of device identifiers is impaired or disabled.</p>
                                    </article>

                                    <article>
                                        <h4>1.3 Information collected during communications between a visitor and Infinity</h4>
                                        <p>Communication made over contact form, bug report, email, telephone, post or different offline supported way is stored for a time necessary for its execution (maximum of 3 weeks, unless otherwise provided by the law). Using the bug report form, the user automatically sends their browser and operating system signature. This data helps us to identify possible problems more quickly and accurately.</p>
                                    </article>
                                </section>

                                <section>
                                    <h3>2. How We Use Your Information</h3>
                                    <p>In addition to some of the specific uses of information we describe in this Privacy Policy, we may use information that we receive to:</p>
                                    <ul>
                                        <li>Sign in option.</li>
                                        <li>Remember information so you will not have to re-enter it during your visit or the next time you visit the Service.</li>
                                        <li>Diagnose or fix technology problems.</li>
                                        <li>Provide personalized content and information to you and others, which could include online ads or other forms of marketing.</li>
                                        <li>Develop and test new products and features.</li>
                                        <li>Monitor metrics such as total number of visitors, traffic, and demographic patterns.</li>
                                    </ul>
                                </section>

                                <section>
                                    <h3>3. Sharing of Your Information</h3>
                                    <p>We will not rent or sell your information to third parties outside Infinity Entertainment s.r.o. (operator and owner of {{ env('APP_NAME') }}) (or the group of companies of which {{ env('APP_NAME') }} is a part) without your consent, except as noted in this Privacy Policy.</p>

                                    <h4>Parties with whom we may share your information:</h4>
                                    <p>We may share your information as well as information from tools like cookies, log files, and device identifiers and location data, with third-party organizations that help us provide the Service to you ("Service Providers"). Our Service Providers will be given access to your information as it is reasonably necessary to provide the Service under reasonable confidentiality terms.</p>
                                    <p>We may also share certain information such as cookie data with third-party advertising partners. This information would allow third-party ad networks to, among other things, deliver targeted advertisements that they believe will be of most interest to you.</p>
                                    <p>We may remove parts of data that can identify you and share anonymized data with other parties. We may also combine your information with other information in a way that it is no longer associated with you and share that aggregated information.</p>
                                </section>

                                <section>
                                    <h3>4. Information Storage and Processing</h3>
                                    <p>Confidential data provided to {{ env('APP_NAME') }} are stored in an encrypted form.</p>
                                    <p>In order to keep the information collected via the Service safe, we are taking appropriate measures for the relevant business purpose, and before we give you access to your account, we will take reasonable steps to verify your identity (such as requiring a unique password).</p>
                                    <p>Infinity, its Affiliates, or Service Providers may transfer information that we collect about you, including personal information across borders and from your country or jurisdiction to other countries or jurisdictions around the world. If you are in the European Union or other regions with laws governing data collection and use that may differ from U.S. law, please note that we may transfer information, including personal information, to a country and jurisdiction that does not have the same data protection laws as your jurisdiction.</p>

                                    <h4>How long we keep your User Content:</h4>
                                    <p>Following termination or deactivation of your account, Infinity Entertainment s.r.o., its Affiliates, or its Service Providers may retain information (including your profile information) and User Content for a commercially reasonable time for backup, archival, and/or audit purposes.</p>
                                </section>

                                <section>
                                    <h3>5. Children's Privacy</h3>
                                    <p>Infinity Entertainment s.r.o. does not knowingly collect or solicit any information from anyone under the age of 13 or knowingly allow such people to register for the Service. The Service and its content are not directed at children under the age of 13. In the event that we learn that we have collected personal information from a child under age 13 without parental consent, we will delete that information as quickly as possible. If you believe that we might have any information about or about a child under 13, please contact us.</p>
                                </section>

                                <section>
                                    <h3>6. Other Websites and Services</h3>
                                    <p>We are not responsible for the practices employed by any websites or services linked to or from our Service, including the information or content contained within them. Please remember that when you use a link to go from our Service to another website or service, our Privacy Policy does not apply to those third-party websites or services.</p>
                                    <p>Our websites or services may enable you to share information with social media sites or use social media sites to create your account or to connect your social media account. Those social media sites may automatically provide us with access to certain personal information retained by them about you (for example any content you have viewed). You should be able to manage your privacy settings from within your own third-party social media account(s) to manage what personal information you enable us to access from that account.</p>
                                </section>

                                <section>
                                    <h3>7. Network Advertising Initiative (NAI)</h3>
                                    <!-- Details could be added here if needed -->
                                </section>

                                <section>
                                    <h3>8. Deletion of Platform Data</h3>
                                    <p>The data of non-logged-in users is stored in the browser. The deletion of the data occurs with the deletion of the data from the browser.</p>
                                    <p>The data of logged-in users is stored on the server. Their deletion occurs with the deletion of the user account. The user account can be deleted in the "settings" menu, using the "Delete my account" button at the bottom of the menu.</p>
                                </section>

                                <section>
                                    <h3>9. Changes to Our Privacy Policy</h3>
                                    <p>Infinity may modify or update this Privacy Policy from time to time, so please review it periodically. We may provide you additional forms of notice of modifications or updates as appropriate under the circumstances. Your continued use of {{ env('APP_NAME') }} or the Service after any modification to this Privacy Policy will constitute your acceptance of such modification.</p>
                                </section>

                                <footer>
                                    <h3>Contacting Us</h3>
                                    <p>If there are any questions regarding this privacy policy, you may contact us using the information below.</p>
                                    <strong>Email : <a href="mailto:{{ env('APP_EMAIL') }}">{{ env('APP_EMAIL') }}</a> </strong>
                                </footer>
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

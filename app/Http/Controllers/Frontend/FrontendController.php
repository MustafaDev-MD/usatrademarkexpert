<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class FrontendController extends Controller
{
    public function home(): View
    {
        return view('frontend.home');
    }

    public function about(): View
    {
        return view('frontend.about');
    }

    public function faqs(): View
    {
        return view('frontend.faqs', $this->faqPageData());
    }

    /**
     * 
     * @return array{
     *     faqs: list<array{
     *         question: string,
     *         answer: string
     *     }>
     * }
     * 
     */

    private function faqPageData(): array
    {
        return [

            'trademarkFaqs' => [

                [
                    'question' => 'What is a trademark?',
                    'answer' => '<p>A trademark is any word, phrase, symbol, logo, design, or combination thereof that identifies and distinguishes the source of goods of one seller or manufacturer from those of others in the marketplace.</p>',
                ],

                [
                    'question' => 'What is the difference between a trademark and a service mark?',
                    'answer' => '<p>While "trademark" is often used as a general term for both, a trademark specifically identifies physical goods or manufactured products, whereas a service mark identifies intangible services (such as consulting, software-as-a-service, or retail services).</p>',
                ],

                [
                    'question' => 'What is trade dress?',
                    'answer' => '<p>Trade dress refers to the overall visual appearance and commercial "look and feel" of a product or its packaging that identifies its source to consumers. It includes unique packaging designs, product shapes, and distinctive retail interior environments.</p>',
                ],

                [
                    'question' => 'Is federal trademark registration required in the United States?',
                    'answer' => '<p>No, federal registration is not strictly mandatory. Simply using a mark in commerce creates limited "common law" rights in your immediate geographic area. However, federal registration with the USPTO provides essential nationwide priority, legal presumption of ownership, and federal court enforcement rights.</p>',
                ],

                [
                    'question' => 'What are the key benefits of registering my trademark federally?',
                    'answer' => '
                                <p>Federal USPTO registration offers critical legal advantages, including:</p>
                                <ul>
                                    <li>Nationwide Notice: Legal presumption of exclusive ownership across all 50 U.S. states.</li>
                                    <li>Federal Enforcement: The right to file trademark infringement lawsuits in U.S. federal courts.</li>
                                    <li>Customs Enforcement: Ability to record your mark with U.S. Customs and Border Protection to block counterfeit imports.</li>
                                    <li>Foreign Expansion: Serves as a solid foundation for securing international trademark protection.</li>
                                    <li>Exclusive Symbol Use: Authorization to display the official ® symbol.</li>
                                </ul>
                            ',
                ],

                [
                    'question' => 'Can I apply for a trademark before I start selling products or services?',
                    'answer' => '<p>Yes. You can file an Intent-to-Use (Section 1(b)) application based on a good-faith intention to use the mark in commerce. This reserves your brand name early. You will simply need to submit proof of commercial use (a Statement of Use) before final registration is granted.</p>',
                ],

                [
                    'question' => 'What are the main steps in the federal trademark registration process?',
                    'answer' => '
                                <p>The typical process follows four key stages:</p>
                                <ul>
                                    <li>Pre-Filing Clearance Search: Checking USPTO and commercial records for conflicting marks.</li>
                                    <li>Application Filing: Submitting complete applicant details, mark graphics, and goods/service classes to the USPTO.</li>
                                    <li>USPTO Examination: Review by an examining attorney for legal and procedural compliance.</li>
                                    <li>Publication & Registration: Formal 30-day public notice for potential oppositions, followed by official registration issuance.</li>
                                </ul>
                            ',
                ],

                [
                    'question' => 'Do I need to hire an attorney to file my trademark?',
                    'answer' => '<p>U.S.-domiciled applicants are not strictly required by law to use an attorney, but working with experienced trademark specialists helps avoid common filing errors, improper class selections, and unexpected Office Action refusals. (Note: Foreign-domiciled applicants are required by USPTO rules to be represented by a U.S.-licensed attorney).</p>',
                ],

                [
                    'question' => 'How long does it take for a trademark application to be approved?',
                    'answer' => '<p>The typical USPTO application timeline takes between 8 to 14 months, depending on examination backlogs, whether an Intent-to-Use basis was selected, and whether the examiner issues an Office Action requiring a response.</p>',
                ],

                [
                    'question' => 'What is the difference between the ™ and ® symbols?',
                    'answer' => '
                                <ul>
                                    <li>™ (Trademark) / ℠ (Service Mark): Can be used by anyone claiming ownership of an unregistered mark to notify the public of their common law rights.</li>
                                    <li>® (Registered Symbol): Can only be legally used after the USPTO officially grants a federal registration certificate. Using ® during a pending application is illegal.</li>
                                </ul>
                            ',
                ],

                [
                    'question' => 'Where should I place the ® symbol on my brand materials?',
                    'answer' => '<p>There are no strict placement rules, but standard industry practice is to place the ® symbol in the upper-right superscript (<sup>®</sup>) or lower-right subscript (<sub>®</sub>) adjacent to your logo or brand name.</p>',
                ],

                [
                    'question' => 'What is a "drawing" and a "specimen" in a USPTO application?',
                    'answer' => '
                                <ul>
                                    <li>Drawing: A clean digital graphic or plain-text file depicting the exact wordmark or logo you want to register.</li>
                                    <li>Specimen: Real-world proof showing how your mark is actively used in sales (e.g., product packaging, branded hangtags, or live e-commerce websites with purchase buttons).</li>
                                </ul>
                            ',
                ],

                [
                    'question' => 'Can I register the name of my band or musical group?',
                    'answer' => '<p>Yes. Band and performer names can be registered as service marks covering "entertainment services in the nature of live musical performances," as well as physical goods like merchandise or sound recordings.</p>',
                ],

                [
                    'question' => 'Can a registered trademark be transferred or sold to someone else?',
                    'answer' => '<p>Yes. Trademarks are valuable intellectual property assets that can be assigned, sold, or transferred through a formal legal document called a Trademark Assignment, which is filed with the USPTO Assignment Recordation Branch.</p>',
                ],

                [
                    'question' => 'Why choose USA Trademark Expert to manage my application?',
                    'answer' => '<p>We eliminate the complexity of trademark law. From pre-filing clearance searches and specimen audits to handling office responses and statement-of-use filings, our team ensures your mark is protected smoothly and accurately.</p>',
                ],

                [
                    'question' => 'What is an International Class of goods or services?',
                    'answer' => '<p>The USPTO categorizes all products and services into 45 International Classes (Classes 1–34 cover physical goods, while Classes 35–45 cover services). Filing fees and clearance searches are calculated based on the number of classes your brand operates in.</p>',
                ],

                [
                    'question' => 'What is a USPTO Office Action?',
                    'answer' => '<p>An Office Action is an official notification issued by a USPTO examining attorney outlining legal, technical, or procedural deficiencies in your application. Responses must be submitted within strict statutory deadlines to prevent your application from becoming abandoned.</p>',
                ],

                [
                    'question' => 'What does "Likelihood of Confusion" mean?',
                    'answer' => '<p>"Likelihood of Confusion" (Section 2(d)) is the most common reason for trademark refusal. It occurs when a proposed mark sounds, looks, or conveys a meaning similar to an existing registered mark in a related industry, leading consumers to confuse the sources.</p>',
                ],

                [
                    'question' => 'What is the difference between descriptive and distinctive trademarks?',
                    'answer' => '
                                <ul>
                                    <li>Distinctive Marks (Fanciful, Arbitrary, Suggestive): Strong, highly protectable names that do not directly describe the product (e.g., Apple for computers).</li>
                                    <li>Descriptive Marks: Words that merely describe a feature, ingredient, or function of the item (e.g., Cold Ice Cream). Descriptive marks are generally refused unless commercial "secondary meaning" is established over time.</li>
                                </ul>
                            ',
                ],

                [
                    'question' => 'Can I register a personal name or surname as a trademark?',
                    'answer' => '<p>A personal name or surname can be registered, but if the USPTO considers it "primarily merely a surname," it may require proof that the name has acquired distinctiveness in the marketplace through extensive commercial use and customer recognition.</p>',
                ],

                [
                    'question' => 'What is a Trademark Opposition proceeding?',
                    'answer' => '<p>After passing USPTO examination, your mark is published in the official Trademark Official Gazette for 30 days. During this window, any third party who believes your registration would damage their existing brand rights can file a formal opposition with the Trademark Trial and Appeal Board (TTAB).</p>',
                ],

                [
                    'question' => 'How long does a federal trademark registration last?',
                    'answer' => '<p>A federal trademark registration can last indefinitely, provided the mark remains in continuous commercial use and all required USPTO maintenance and renewal filings are submitted on time.</p>',
                ],

                [
                    'question' => 'When must I file trademark maintenance and renewal documents?',
                    'answer' => '
                                <p>Required USPTO post-registration filings include:</p>
                                <ul>
                                    <li>Section 8 Declaration: Filed between the 5th and 6th years after initial registration.</li>
                                    <li>Section 8 & 9 Renewal: Filed between the 9th and 10th years, and every 10 years thereafter.</li>
                                </ul>
                            ',
                ],

                [
                    'question' => 'What is the difference between a Section 8 and Section 15 declaration?',
                    'answer' => '<ul>
                                    <li>Section 8 Declaration: A mandatory filing confirming that your trademark is actively used in commerce.</li>
                                    <li>Section 15 Declaration: An optional filing made after 5 consecutive years of registered commercial use that grants your mark "incontestable" status, protecting it against common court challenges.</li>
                                </ul>',
                ],

                [
                    'question' => 'Who is responsible for monitoring and enforcing my trademark?',
                    'answer' => '<p>The USPTO approves registrations but does not actively police or enforce your mark. As the owner, you are responsible for monitoring the market for unauthorized infringers and taking legal action to defend your brand rights.</p>',
                ],

                [
                    'question' => 'What should I do if someone is infringing on my registered trademark?',
                    'answer' => '<p>You can issue a formal Cease and Desist notice, initiate digital marketplace/DMCA takedown procedures, or pursue civil litigation in federal court to halt unauthorized commercial use and recover monetary damages.</p>',
                ],

                [
                    'question' => 'What is trademark abandonment?',
                    'answer' => '<p>A trademark is considered abandoned if commercial use stops with no intention to resume (presumed after 3 consecutive years of non-use) or if the owner fails to file required USPTO renewal documents on time.</p>',
                ],

                [
                    'question' => 'Is registering a state LLC or DBA the same as federal trademark protection?',
                    'answer' => '<p>No. Registering an LLC, corporation, or DBA with your state secretary only grants you the right to operate under that name in that specific state. It does not grant federal trademark rights or prevent out-of-state competitors from using your brand.</p>',
                ],

                [
                    'question' => 'Can I trademark a website domain name or social media handle?',
                    'answer' => '<p>Yes, but only if the domain or handle is used as a brand identifier for goods or services (e.g., Booking.com) rather than functioning merely as an internet web address.</p>',
                ],

                [
                    'question' => 'Does a U.S. trademark protect my brand in foreign countries?',
                    'answer' => '<p>No. U.S. trademark registrations are territorial and apply exclusively within the United States and its territories. Protecting your brand internationally requires filing separate registrations in target countries.</p>',
                ],

                [
                    'question' => 'What is the Madrid Protocol?',
                    'answer' => '<p>The Madrid Protocol is an international treaty that allows U.S. trademark owners to extend their protection to over 120 member countries through a single standardized application filed via the USPTO.</p>',
                ],

                [
                    'question' => 'What happens if I alter my logo or brand name after registration?',
                    'answer' => '<p>The USPTO does not permit material changes to registered trademarks. If you significantly update your logo or rebrand your name, you must file a new trademark application to protect the updated visual mark.</p>',
                ],

            ],

            'copyrightFaqs' => [

                [
                    'question' => 'What is a copyright?',
                    'answer' => '<p>A copyright is a form of intellectual property protection grounded in the U.S. Constitution that protects original works of authorship fixed in a tangible medium of expression.</p>',
                ],

                [
                    'question' => 'What types of creative works can be copyrighted?',
                    'answer' => '
                                <p>Copyright protects a wide spectrum of creative expression, including:</p>
                                <ul>
                                    <li>Literary Works: Books, articles, blog posts, software source code, and mobile app content.</li>
                                    <li>Visual Arts: Graphic designs, illustrations, photographs, paintings, and logos.</li>
                                    <li>Performing Arts: Musical compositions, sound recordings, scripts, and choreography.</li>
                                    <li>Architectural & Sculptural Works: Building plans, 3D models, and physical sculptures.</li>
                                </ul>
                            ',
                ],

                [
                    'question' => 'What cannot be protected by copyright?',
                    'answer' => '<p>Copyright does not protect ideas, concepts, facts, systems, operational methods, raw data, blank forms, or short phrases/titles. (Note: Titles, slogans, and brand names are protected under trademark law instead).</p>',
                ],

                [
                    'question' => 'When does copyright protection actually begin?',
                    'answer' => '<p>Copyright protection exists automatically the moment an original work is created and fixed in a tangible form (such as written on paper, saved to a digital hard drive, or recorded on audio/video).</p>',
                ],

                [
                    'question' => 'What is the difference between a copyright, a trademark, and a patent?',
                    'answer' => '
                                <ul>
                                    <li>Copyright: Protects original creative, artistic, and literary expressions.</li>
                                    <li>Trademark: Protects brand identifiers like business names, logos, and slogans used in commerce.</li>
                                    <li>Patent: Protects functional inventions, mechanical designs, and industrial processes.</li>
                                </ul>
                            ',
                ],

                [
                    'question' => 'Do I need to display the © symbol on my work?',
                    'answer' => '<p>Displaying the copyright symbol (©) is no longer legally required for protection on works created after March 1, 1989. However, using it serves as clear public notice of ownership and defeats an infringer’s claim of "innocent infringement."</p>',
                ],

                [
                    'question' => 'Why should I formally register my copyright if protection is automatic?',
                    'answer' => '<p>While basic copyright exists upon creation, official registration with the U.S. Copyright Office is mandatory to file an infringement lawsuit in U.S. federal court. Timely registration also qualifies you for statutory damages up to $150,000 per violation plus legal fee recovery.</p>',
                ],

                [
                    'question' => 'What is a deposit copy?',
                    'answer' => '<p>A deposit copy is an official visual, physical, or digital copy of your creative work (e.g., a manuscript PDF, audio file, or digital image) submitted to the U.S. Copyright Office along with your application for archival and examination purposes.</p>',
                ],

                [
                    'question' => 'Can I register multiple works under a single copyright application?',
                    'answer' => '<p>Yes. Under specific U.S. Copyright Office rules (such as Group Registration for Unpublished Works, Group Photographs, or Group Short Online Literary Works), you can register multiple related assets in one application to save on filing fees.</p>',
                ],

                [
                    'question' => 'What is a "Work Made for Hire"?',
                    'answer' => '<p>A "Work Made for Hire" is a work created by an employee within the scope of their employment, or a specially ordered/commissioned work where both parties sign a written agreement. In these cases, the employer or commissioning party is considered the legal author and copyright owner.</p>',
                ],

                [
                    'question' => 'How long does the U.S. Copyright Office take to issue a registration certificate?',
                    'answer' => '<p>Digital applications submitted with electronic deposit uploads typically take 2 to 6 months to process. Physical deposit submissions or complex applications requiring manual examiner review can take longer.</p>',
                ],

                [
                    'question' => 'Do I need to be a U.S. citizen to register a copyright with the USPTO / U.S. Copyright Office?',
                    'answer' => '<p>No. Foreign creators and non-U.S. citizens can register their works in the United States, as the U.S. maintains copyright treaties (such as the Berne Convention) with over 180 countries worldwide.</p>',
                ],

                [
                    'question' => 'How long does a federal copyright last?',
                    'answer' => '
                                <p>Duration depends on who created the work:</p>
                                <ul>
                                    <li>Individual Author: The author’s entire lifetime plus 70 years after their death.</li>
                                    <li>Works Made for Hire / Corporate Works: 95 years from the date of first publication or 120 years from the date of creation, whichever expires first.</li>
                                </ul>
                            ',
                ],

                [
                    'question' => 'What exclusive legal rights does a copyright owner hold?',
                    'answer' => '
                                <p>As a copyright owner, you hold the exclusive right to:</p>
                                <ul>
                                    <li>Reproduce and copy the work.</li>
                                    <li>Prepare derivative works based on the original.</li>
                                    <li>Distribute copies to the public by sale, rental, or lease.</li>
                                    <li>Publicly perform or display the work.</li>
                                </ul>
                            ',
                ],

                [
                    'question' => 'Can I transfer, sell, or license my copyright to someone else?',
                    'answer' => '<p>Yes. Copyrights can be sold or assigned permanently through a written Copyright Assignment, or leased temporarily through a Copyright License Agreement that specifies exact usage scope and royalties.</p>',
                ],

                [
                    'question' => 'What is the difference between exclusive and non-exclusive copyright licenses?',
                    'answer' => '
                                <ul>
                                    <li>Exclusive License: The licensee is the only person permitted to use the work in a defined manner, and the copyright owner cannot grant those rights to anyone else.</li>
                                    <li>Non-Exclusive License: The copyright owner can grant the exact same rights to multiple parties simultaneously.</li>
                                </ul>
                            ',
                ],

                [
                    'question' => 'What constitutes copyright infringement?',
                    'answer' => '<p>Copyright infringement occurs whenever a third party exercises any of the owner\'s exclusive rights (such as copying, distributing, displaying, or modifying the work) without express legal authorization or license.</p>',
                ],

                [
                    'question' => 'What is "Fair Use"?',
                    'answer' => '<p>Fair Use is a legal doctrine that permits limited use of copyrighted material without permission for purposes such as criticism, news reporting, teaching, scholarship, or research. Courts evaluate Fair Use based on four factors, including commercial purpose and financial effect on the market.</p>',
                ],

                [
                    'question' => 'What are statutory damages and attorney fee recoveries?',
                    'answer' => '<p>If you register your work within 3 months of publication (or before infringement occurs), you do not have to prove actual financial losses. Courts can award statutory damages ranging from $750 up to $150,000 per willful infringement, plus reimbursement of your legal fees.</p>',
                ],

                [
                    'question' => 'Can software, mobile apps, and website code be copyrighted?',
                    'answer' => '<p>Yes. Computer source code, object code, user interface graphics, and app content are legally classified as literary/visual works and can be registered to prevent competitor code theft.</p>',
                ],

                [
                    'question' => 'How do I remove stolen copyrighted content from the internet?',
                    'answer' => '<p>You can enforce your rights through a formal DMCA Takedown Notice issued to web hosting providers, e-commerce marketplaces (Amazon, Etsy, eBay), social media platforms, or search engines (Google, Bing) to disable access to pirated copies.</p>',
                ],

                [
                    'question' => 'Can I copyright AI-generated content?',
                    'answer' => '<p>According to current U.S. Copyright Office guidance, purely AI-generated text, art, or code without human creative input is not eligible for copyright. However, human-created arrangements, edits, or compilations containing AI elements may receive limited copyright protection.</p>',
                ],

                [
                    'question' => 'What happens if I update or revise my registered work?',
                    'answer' => '<p>Minor edits do not require a new filing. However, if you create a major revision, new edition, or derivative work containing significant new creative content, you should file a new copyright registration for the updated version.</p>',
                ],

                [
                    'question' => 'Why should I use USA Trademark Expert for my copyright registration?',
                    'answer' => '<p>Preparing proper deposit files, selecting correct work classifications, and defining exact authorship claims can be tricky. We handle the entire submission process smoothly to ensure your creative assets achieve maximum, enforceable protection without administrative delays.</p>',
                ],

            ],

        ];
    }

    public function resources(): View
    {
        return view('frontend.resources');
    }

    public function blog(): View
    {
        return view('frontend.blog');
    }

    public function singleBlog(): View
    {
        return view('frontend.single-blog');
    }

    public function contact(): View
    {
        return view('frontend.contact');
    }

    public function privacyPolicy(): View
    {
        return view('frontend.privacy-policy');
    }

    public function ourTeam(): View
    {
        return view('frontend.our-team');
    }

    public function service(string $slug): View
    {
        $services = $this->servicesData();

        abort_unless(isset($services[$slug]), 404);

        return view('frontend.service', $services[$slug]);
    }

    /**
     * 
     * @return array<string, array<string, mixed>>
     * 
     */

    private function servicesData(): array
    {
        return [

            'trademark-registration' => [

                /*
                |--------------------------------------------------------------------------
                | Meta
                |--------------------------------------------------------------------------
                */
                'metaTitle' => 'Federal Trademark Registration',
                'metaDescription' => 'Protect your brand name, logo, or slogan nationwide with seamless, attorney-assisted USPTO filing.',

                /*
                |--------------------------------------------------------------------------
                | Hero
                |--------------------------------------------------------------------------
                */

                'heroTitle' => 'Federal Trademark Registration',

                'heroDescription' => 'Protect your brand name, logo, or slogan nationwide with seamless, attorney-assisted USPTO filing.',

                'heroFeatures' => [
                    'USPTO Direct-Hit Database Search: Verify availability and catch conflicts early.',
                    'Custom Goods & Services Mapping: Precise legal classification for maximum protection.',
                    'Complete Application Processing: Full file preparation and official government submission.',
                ],

                'heroButtonText' => 'Start Your Filing',

                'heroButtonLink' => route('contact'),

                'heroImage' => asset('assets/images/services/service-banner.png'),

                /*
                |--------------------------------------------------------------------------
                | Process
                |--------------------------------------------------------------------------
                */
                'processTitle' => 'Why Register Your Trademark?',

                'processDescription' => 'Securing your intellectual property prevents costly disputes, blocks competitors from stealing your identity, and establishes total ownership of your brand.',

                'processCards' => [

                    [
                        'title' => 'Nationwide Exclusivity',
                        'description' => 'Stop competitors from using confusingly similar names. Federal registration grants you the presumed right to exclusive use of your mark across the entire country, not just locally.',
                    ],

                    [
                        'title' => 'Enhanced Legal Power',
                        'description' => 'A registered mark gives you superior standing in federal court. It proves the validity of your brand ownership and opens the door to additional financial remedies in infringement lawsuits.',
                    ],

                    [
                        'title' => 'Official Brand Authority',
                        'description' => 'Unlock the right to use the prestigious ® symbol on your products and marketing. This signals to the market that your business is established, serious, and legally protected.',
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | Extension
                |--------------------------------------------------------------------------
                */

                'extensionTitle' => 'Why Conduct a Trademark Search First?',

                'extensionDescription' => 'Before submitting your official application, verifying that your brand name or logo is truly available is critical. A pre-filing clearance search identifies existing registrations and confusingly similar marks, helping you avoid immediate USPTO rejections, non-refundable government fees, and mandatory rebranding later.',

                'extensionInsightTitle' => 'KEY INSIGHT:',

                'extensionInsight' => 'USPTO filing fees are strictly non-refundable once submitted. Checking your mark’s availability upfront protects your financial investment and speeds up approval.',

                'extensionPrimaryButtonText' => 'Get Started',

                'extensionPrimaryButtonLink' => route('contact'),

                'extensionSecondaryButtonText' => 'Learn More',

                'extensionSecondaryButtonLink' => '#',

                'extensionImage' => asset('assets/images/services/extension.png'),

                'extensionCards' => [

                    [
                        'icon' => 'fa-solid fa-file-lines',
                        'title' => 'Direct-Hit USPTO Search',
                    ],

                    [
                        'icon' => 'fa-solid fa-shield-halved',
                        'title' => 'Conflict & Risk Clearance',
                    ],

                    [
                        'icon' => 'fa-solid fa-scale-balanced',
                        'title' => 'Attorney-Backed Guidance',
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | Pricing
                |--------------------------------------------------------------------------
                */

                'pricingTitle' => 'Clear Packages, Complete Protection',

                'pricingDescription' => 'Choose the level of legal support and filing expertise that matches your business goals.',

                'pricingPackages' => [

                    [
                        'title' => 'Basic Package',

                        'price' => 49,

                        'description' => 'Straightforward filing tools to get your application officially submitted.',

                        'features' => [

                            'Federal Database Direct-Hit Search:
                            We scan the USPTO registry to check your mark’s availability and flag immediate conflicts.',

                            'Custom Legal Classification:
                            Our team reviews the USPTO ID manual to precisely categorize your goods and services for maximum protection.',

                        ],

                        'active' => false,

                        'button' => 'Choose Basic',

                        'link' => route('contact'),
                    ],

                    [
                        'title' => 'Standard Package',

                        'price' => 299,

                        'description' => 'Step up to dedicated legal guidance and brand enforcement tools.',

                        'features' => [

                            '1-on-1 Attorney Consultation: Speak directly with a trademark lawyer during a focused 15-minute session to address your specific brand questions.',

                            'Cease & Desist Safeguards: Receive formal documentation to take immediate action if another business attempts to infringe on your name.',

                        ],

                        'active' => true,

                        'badge' => 'ENHANCED PROTECTION',

                        'button' => 'Choose Standard',

                        'link' => route('contact'),
                    ],

                    [
                        'title' => 'Premium Package',

                        'price' => 539,

                        'description' => 'The gold standard for rapid filing and long-term brand monitoring.',

                        'features' => [

                            'Comprehensive Strategy Session: An extended 1-hour consultation with a trademark attorney for deep-dive legal planning.',

                            '48-Hour Priority Rush Processing: Fast-track your application structure to lock in your official filing date as quickly as possible.',

                            'Continuous Infringement Monitoring: Alerts to safeguard your registered mark from copycats (free trial included).',

                        ],

                        'active' => false,

                        'button' => 'Choose Premium',

                        'link' => route('contact'),
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | Authority
                |--------------------------------------------------------------------------
                */
                'authorityTitle' => 'Name vs. Logo: What Should You Protect?',

                'authorityLeftIcon' => 'fa-regular fa-file-lines',

                'authorityLeftTitle' => 'Trademarking Your Name',

                'authorityLeftItems' => [

                    'Offers the broadest nationwide brand protection',

                    'Shields your brand regardless of font or color style',

                    'Remains fully valid through future logo redesigns',

                ],

                'authorityRightTitle' => 'Registering Your Custom Logo',

                'authorityRightDescription' => 'While trademarking your name provides the strongest legal baseline, registering a logo locks down your unique visual identity, graphic artwork, and stylization. Securing both guarantees that competitors cannot clone your business name or misappropriate your visual representation in the marketplace.',

                /*
                |--------------------------------------------------------------------------
                | Testimonials
                |--------------------------------------------------------------------------
                */

                'testimonialTitle' => 'Loved by Business Owners Across the Country',

                'testimonials' => [

                    [
                        'stars' => 5,
                        'review' => 'The 48-hour rush processing was vital for our product launch. Having an attorney review and submit our application so quickly gave us absolute confidence.',
                        'name' => 'C. Lopez',
                        'designation' => 'E-Commerce Director',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'Our brand spanned two tricky trademark classes. The legal support team handled the custom classification flawlessly, making the USPTO process completely seamless.',
                        'name' => 'M. Jenkins',
                        'designation' => 'Brand Owner',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'Outstanding legal guidance from start to finish. They answered all my questions about brand exclusivity and secured our official filing date without delay.',
                        'name' => 'D. Kim',
                        'designation' => 'Startup Founder',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'The 48-hour rush processing was vital for our product launch. Having an attorney review and submit our application so quickly gave us absolute confidence.',
                        'name' => 'C. Lopez',
                        'designation' => 'E-Commerce Director',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'Our brand spanned two tricky trademark classes. The legal support team handled the custom classification flawlessly, making the USPTO process completely seamless.',
                        'name' => 'M. Jenkins',
                        'designation' => 'Brand Owner',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'Outstanding legal guidance from start to finish. They answered all my questions about brand exclusivity and secured our official filing date without delay.',
                        'name' => 'D. Kim',
                        'designation' => 'Startup Founder',
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | FAQs
                |--------------------------------------------------------------------------
                */
                'faqTitle' => 'Frequently Asked Questions',

                'faqs' => [

                    [
                        'question' => 'What is a federal trademark and how does it protect my business?',
                        'answer' => '<p>A trademark is an exclusive legal identifier—such as a word, phrase, logo, or symbol—that distinguishes your goods or services from competitors. Registering your mark with the USPTO grants you nationwide legal presumption of ownership, deters potential copycats, and gives you the right to display the official ® symbol alongside your brand.</p>'
                    ],

                    [
                        'question' => 'What is a "common law" trademark vs. federal registration?',
                        'answer' => '<p>Common law rights are established automatically simply by using a brand name in commerce, but they only apply to your local geographic area. Federal USPTO registration expands your protection nationwide across all 50 states, preventing competitors anywhere in the country from using or registering a confusingly similar mark.</p>'
                    ],

                    [
                        'question' => 'Should I trademark my brand name, my custom logo, or both?',
                        'answer' => '<p>Trademarking your name provides the broadest overall protection because it shields your word mark regardless of font, color, or design changes. Registering your logo locks down your specific visual graphics and styling. While securing both offers total coverage, starting with your brand name usually establishes the strongest legal foundation.</p>'
                    ],

                    [
                        'question' => 'I already own my domain name and social media handles—do I still need a trademark?',
                        'answer' => '<p>Yes. Purchasing a domain name or securing social handles does not grant legal trademark rights. A third party holding a registered federal trademark can legally force you to surrender a domain or change your business name if they prove it creates consumer confusion in the marketplace.</p>'
                    ],

                    [
                        'question' => 'Can I trademark a tagline or marketing slogan?',
                        'answer' => '<p>Absolutely. As long as your slogan is creative, distinctive, and actively used to promote your goods or services, it can be federally registered. Generic phrases cannot be trademarked, but unique taglines that consumers associate directly with your brand qualify for full protection.</p>'
                    ],

                    [
                        'question' => 'What information do I need to submit to get started?',
                        'answer' => <<<HTML
                            <p>Completing our online form takes under 10 minutes. You will need:</p>

                            <ul>
                                <li>The exact mark (name, slogan, or logo) you wish to protect.</li>
                                <li>The legal owner's full name and contact details.</li>
                                <li>A brief description of the products or services you offer.</li>
                                <li>If already in use: A specimen (a photo, label, or website screenshot showing the mark in commerce) and your date of first commercial use.</li>
                            </ul>
                            HTML,
                    ],

                    [
                        'question' => 'Why is a pre-filing clearance search so important?',
                        'answer' => '<p>A clearance search scans federal databases for existing marks that may be phonetically or visually similar to yours. Because USPTO filing fees are strictly non-refundable, searching upfront helps identify potential conflict risks before you spend money on government applications.</p>'
                    ],

                    [
                        'question' => 'What happens if I am not actively selling or launched yet?',
                        'answer' => '<p>You can file an "Intent-to-Use" (ITU) application. This allows you to reserve your brand name and lock in your nationwide priority filing date with the USPTO before your products or services officially hit the market.</p>'
                    ],

                    [
                        'question' => 'How long does the federal trademark registration process take?',
                        'answer' => '<p>Once submitted, your official application date is locked in immediately. The USPTO typically completes its initial attorney review within a few months. If no conflicts or Office Actions arise, full registration generally takes between 8 and 12 months.</p>'
                    ],

                    [
                        'question' => 'What is a Declaration of Incontestability?',
                        'answer' => '<p>After five consecutive years of active federal registration, we can help you file a Section 15 Declaration of Incontestability. This grants your mark the highest level of legal protection under U.S. trademark law, making it nearly impossible for competitors to contest your ownership rights in court.</p>'
                    ],

                ],
            ],

            'trademark-monitoring' => [
                /*
                |--------------------------------------------------------------------------
                | Meta
                |--------------------------------------------------------------------------
                */
                'metaTitle' => 'Federal Trademark Registration',
                'metaDescription' => 'Protect your brand name, logo, or slogan nationwide with seamless, attorney-assisted USPTO filing.',

                /*
                |--------------------------------------------------------------------------
                | Hero
                |--------------------------------------------------------------------------
                */

                'heroTitle' => 'Continuous Trademark Monitoring',

                'heroDescription' => 'Proactively defend your brand against unauthorized use, potential infringement, and marketplace dilution.',

                'heroFeatures' => [
                    '24/7 USPTO Database Scans: Detect newly submitted applications that closely mimic your mark.',
                    'Instant Conflict Alerts: Receive immediate notifications whenever similar filings emerge.',
                    'Proactive Defense Strategy: Take swift legal action before copycats establish market presence.',
                ],

                'heroButtonText' => 'Start Monitoring Now',

                'heroButtonLink' => route('contact'),

                'heroImage' => asset('assets/images/services/service-banner.png'),

                /*
                |--------------------------------------------------------------------------
                | Process
                |--------------------------------------------------------------------------
                */
                'processTitle' => 'Why Is Active Brand Monitoring Essential?',

                'processDescription' => 'Registering a trademark is only the first step. Continuous surveillance ensures no competitor encroaches on your exclusive rights or dilutes your brand identity.',

                'processCards' => [

                    [
                        'title' => 'Early Infringement Detection',
                        'description' => 'Catch conflicting applications immediately. Automated tracking scans federal registries continuously so you can oppose similar marks before the USPTO officially grants them protection.',
                    ],

                    [
                        'title' => 'Prevent Brand Dilution',
                        'description' => 'Safeguard your brand’s commercial value and reputation. Allowing unauthorized or confusingly similar marks to coexist weakens your legal standing and confuses your customers.',
                    ],

                    [
                        'title' => 'Safeguard Market Equity',
                        'description' => 'Preserve the nationwide trust and goodwill you have built. Proactive vigilance ensures that your business name, logo, and slogans remain strictly yours across all channels.',
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | Extension
                |--------------------------------------------------------------------------
                */
                'extensionTitle' => 'Why Is Proactive Surveillance Necessary?',

                'extensionDescription' => 'The USPTO does not actively police trademark infringement or enforce your legal rights for you. As a brand owner, the responsibility to monitor federal databases and challenge conflicting mark submissions rests entirely with you before those applications become fully registered.',

                'extensionInsightTitle' => 'KEY INSIGHT:',

                'extensionInsight' => 'Challenging a conflicting mark during its 30-day official publication window is significantly faster and far less costly than attempting to cancel a fully registered trademark later in court.',

                'extensionPrimaryButtonText' => 'Activate Monitoring',

                'extensionPrimaryButtonLink' => route('contact'),

                'extensionSecondaryButtonText' => 'Learn More',

                'extensionSecondaryButtonLink' => '#',

                'extensionImage' => asset('assets/images/services/extension.png'),

                'extensionCards' => [

                    [
                        'icon' => 'fa-solid fa-file-lines',
                        'title' => 'Automated Registry Scans',
                    ],

                    [
                        'icon' => 'fa-solid fa-shield-halved',
                        'title' => 'Instant Conflict Alerts',
                    ],

                    [
                        'icon' => 'fa-solid fa-scale-balanced',
                        'title' => 'Enforcement-Ready Support',
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | Pricing
                |--------------------------------------------------------------------------
                */
                'pricingPackages' => [

                    [
                        'title' => 'Basic Package',

                        'price' => 49,

                        'description' => 'Straightforward filing tools to get your application officially submitted.',

                        'features' => [

                            'Federal Database Direct-Hit Search:
                            We scan the USPTO registry to check your mark’s availability and flag immediate conflicts.',

                            'Custom Legal Classification:
                            Our team reviews the USPTO ID manual to precisely categorize your goods and services for maximum protection.',

                        ],

                        'active' => false,

                        'button' => 'Choose Basic',

                        'link' => route('contact'),
                    ],

                    [
                        'title' => 'Standard Package',

                        'price' => 299,

                        'description' => 'Step up to dedicated legal guidance and brand enforcement tools.',

                        'features' => [

                            '1-on-1 Attorney Consultation: Speak directly with a trademark lawyer during a focused 15-minute session to address your specific brand questions.',

                            'Cease & Desist Safeguards: Receive formal documentation to take immediate action if another business attempts to infringe on your name.',

                        ],

                        'active' => true,

                        'badge' => 'ENHANCED PROTECTION',

                        'button' => 'Choose Standard',

                        'link' => route('contact'),
                    ],

                    [
                        'title' => 'Premium Package',

                        'price' => 539,

                        'description' => 'The gold standard for rapid filing and long-term brand monitoring.',

                        'features' => [

                            'Comprehensive Strategy Session: An extended 1-hour consultation with a trademark attorney for deep-dive legal planning.',

                            '48-Hour Priority Rush Processing: Fast-track your application structure to lock in your official filing date as quickly as possible.',

                            'Continuous Infringement Monitoring: Alerts to safeguard your registered mark from copycats (free trial included).',

                        ],

                        'active' => false,

                        'button' => 'Choose Premium',

                        'link' => route('contact'),
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | Authority
                |--------------------------------------------------------------------------
                */
                'authorityTitle' => 'Federal Database vs. Market-Wide Surveillance',

                'authorityLeftIcon' => 'fa-regular fa-file-lines',

                'authorityLeftTitle' => 'Federal USPTO Monitoring',

                'authorityLeftItems' => [

                    'Daily scans of new USPTO filings for phonetic and visual matches',

                    'Automated detection of conflicting marks in similar industry classes',

                    'Early warnings that allow you to file timely Opposition Proceedings',

                ],

                'authorityRightTitle' => 'Multi-Channel Brand Tracking',

                'authorityRightDescription' => 'Comprehensive brand protection goes beyond government filings. Tracking state business registries, domain registrations, and digital sales platforms ensures third parties cannot unauthorizedly leverage your brand identity anywhere in the commercial market.',

                /*
                |--------------------------------------------------------------------------
                | Testimonials
                |--------------------------------------------------------------------------
                */

                'testimonialTitle' => 'Real Protection for Growing Brands',

                'testimonials' => [

                    [
                        'stars' => 5,
                        'review' => 'The monitoring service flagged a confusingly similar trademark application within days of its submission. We stopped a potential copycat before they could even launch.',
                        'name' => 'R. Vance',
                        'designation' => 'Founder & CEO',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'Having USA Trademark Expert monitor our mark gives us complete peace of mind. Their instant alert system keeps our entire product line protected effortlessly.',
                        'name' => 'S. Mehta',
                        'designation' => 'Operations Director',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'Essential post-registration service! Receiving regular tracking updates ensures no one quietly encroaches on our established market share.',
                        'name' => 'T. Gallagher',
                        'designation' => 'E-Commerce Retailer',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'The monitoring service flagged a confusingly similar trademark application within days of its submission. We stopped a potential copycat before they could even launch.',
                        'name' => 'R. Vance',
                        'designation' => 'Founder & CEO',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'Having USA Trademark Expert monitor our mark gives us complete peace of mind. Their instant alert system keeps our entire product line protected effortlessly.',
                        'name' => 'S. Mehta',
                        'designation' => 'Operations Director',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'Essential post-registration service! Receiving regular tracking updates ensures no one quietly encroaches on our established market share.',
                        'name' => 'T. Gallagher',
                        'designation' => 'E-Commerce Retailer',
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | FAQs
                |--------------------------------------------------------------------------
                */
                'faqTitle' => 'Frequently Asked Questions',

                'faqs' => [

                    [
                        'question' => 'What is trademark monitoring and why do I need it?',
                        'answer' => '<p>Trademark monitoring is the continuous surveillance of government databases and market registries for newly filed names, logos, or slogans that conflict with yours. It allows you to identify and stop potential copycats before their applications gain legal approval.</p>'
                    ],

                    [
                        'question' => "Doesn't the USPTO automatically block conflicting trademarks?",
                        'answer' => '<p>Not always. While USPTO examining attorneys review applications, they may not flag every potential overlap. Brand owners hold the ultimate responsibility to actively monitor, enforce, and defend their own exclusive trademark rights.</p>'
                    ],

                    [
                        'question' => 'How frequently are federal databases scanned for matches?',
                        'answer' => '<p>Our automated tracking system conducts continuous scans across official USPTO registries, evaluating phonetic, visual, and conceptual similarities to your mark as soon as new filings hit the database.</p>'
                    ],

                    [
                        'question' => 'What happens when a conflicting application is detected?',
                        'answer' => "<p>You receive an immediate alert detailing the competing mark, the applicant's information, and its potential impact on your business. Our support team then outlines the best legal steps to take.</p>"
                    ],

                    [
                        'question' => 'What is a 30-day Opposition Window?',
                        'answer' => '<p>Before a trademark is officially registered, the USPTO publishes it in the Official Gazette for 30 days. This window gives existing trademark owners the right to formally oppose and block the registration of conflicting marks.</p>'
                    ],

                    [
                        'question' => 'Can I monitor a trademark while my application is still pending?',
                        'answer' => '<p>Yes. Actively monitoring while your application is pending secures your priority filing status and ensures competing businesses do not attempt to register similar marks in the interim.</p>',
                    ],

                    [
                        'question' => 'Does trademark monitoring cover domain names and common law uses?',
                        'answer' => '<p>While federal USPTO monitoring covers primary government filings, multi-channel surveillance options can also track domain name registrations and digital marketplaces to provide broader brand safety.</p>'
                    ],

                    [
                        'question' => 'What is the difference between a clearance search and ongoing monitoring?',
                        'answer' => '<p>A pre-filing clearance search checks previously existing registrations before you apply, whereas ongoing monitoring continuously tracks future filings submitted by competitors after your mark is active.</p>'
                    ],

                    [
                        'question' => 'How do I stop someone if an alert flags an infringing mark?',
                        'answer' => '<p>Depending on how far along the conflicting application is, response strategies include submitting an official USPTO Letter of Protest, serving a formal Cease & Desist letter, or launching an Opposition Proceeding.</p>'
                    ],

                    [
                        'question' => 'Can I cancel a monitoring plan at any time?',
                        'answer' => '<p>Yes. Our monitoring services offer flexible subscription models so you can maintain active protection for as long as your brand requires continuous defense.</p>'
                    ],

                ],
            ],

            'trademark-renewal' => [
                /*
                |--------------------------------------------------------------------------
                | Meta
                |--------------------------------------------------------------------------
                */
                'metaTitle' => 'Federal Trademark Registration',
                'metaDescription' => 'Protect your brand name, logo, or slogan nationwide with seamless, attorney-assisted USPTO filing.',

                /*
                |--------------------------------------------------------------------------
                | Hero
                |--------------------------------------------------------------------------
                */

                'heroTitle' => 'Federal Trademark Renewal Services',

                'heroDescription' => 'Maintain your registered rights and keep your brand legally protected with seamless Section 8 and Section 9 filings.',

                'heroFeatures' => [
                    'USPTO Maintenance Filings: Expert preparation of Section 8 Declarations and Section 9 Renewals.',
                    'Specimen Compliance Audits: Ensure your current commercial use meets strict USPTO standards.',
                    'Deadline Safeguards: Avoid costly grace-period surcharges or permanent mark cancellation.',
                ],

                'heroButtonText' => 'Renew Your Trademark',

                'heroButtonLink' => route('contact'),

                'heroImage' => asset('assets/images/services/service-banner.png'),

                /*
                |--------------------------------------------------------------------------
                | Process
                |--------------------------------------------------------------------------
                */
                'processTitle' => 'Why Is Timely Renewal Critical?',

                'processDescription' => 'Federal trademark rights can last indefinitely, but only if required maintenance filings are submitted on schedule with the USPTO.',

                'processCards' => [

                    [
                        'title' => 'Prevent Permanent Cancellation',
                        'description' => 'Missing mandatory USPTO filing windows causes your registration to expire automatically. Timely renewal ensures your nationwide brand protection never lapses.',
                    ],

                    [
                        'title' => 'Preserve Priority Ownership',
                        'description' => 'Continuous renewals protect your original filing date and nationwide rights, preventing competitors from snatching up your established brand name or logo.',
                    ],

                    [
                        'title' => 'Avoid Surcharges & Re-Filing',
                        'description' => 'Submitting your declaration within the primary renewal window saves your business from expensive USPTO late fees, penalties, or having to re-apply from scratch.',
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | Extension
                |--------------------------------------------------------------------------
                */
                'extensionTitle' => 'Why Are USPTO Renewal Filings Mandatory?',

                'extensionDescription' => 'Federal trademark registrations do not automatically stay active forever. The USPTO requires trademark owners to periodically submit official proof of commercial use between the 5th and 6th years, and every 10 years thereafter, to maintain active federal status and prevent mark expiration.',

                'extensionInsightTitle' => 'KEY INSIGHT:',

                'extensionInsight' => 'Missing your USPTO maintenance deadline results in immediate cancellation of your trademark, surrendering your nationwide rights and allowing competitors to claim your brand name.',

                'extensionPrimaryButtonText' => 'Start Renewal',

                'extensionPrimaryButtonLink' => route('contact'),

                'extensionSecondaryButtonText' => 'Learn More',

                'extensionSecondaryButtonLink' => '#',

                'extensionImage' => asset('assets/images/services/extension.png'),

                'extensionCards' => [

                    [
                        'icon' => 'fa-solid fa-file-lines',
                        'title' => 'Section 8 & 9 Declarations',
                    ],

                    [
                        'icon' => 'fa-solid fa-shield-halved',
                        'title' => 'Specimen Audit & Filing',
                    ],

                    [
                        'icon' => 'fa-solid fa-scale-balanced',
                        'title' => 'Deadline Protection',
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | Pricing
                |--------------------------------------------------------------------------
                */
                'pricingPackages' => [

                    [
                        'title' => 'Basic Package',

                        'price' => 49,

                        'description' => 'Straightforward filing tools to get your application officially submitted.',

                        'features' => [

                            'Federal Database Direct-Hit Search:
                            We scan the USPTO registry to check your mark’s availability and flag immediate conflicts.',

                            'Custom Legal Classification:
                            Our team reviews the USPTO ID manual to precisely categorize your goods and services for maximum protection.',

                        ],

                        'active' => false,

                        'button' => 'Choose Basic',

                        'link' => route('contact'),
                    ],

                    [
                        'title' => 'Standard Package',

                        'price' => 299,

                        'description' => 'Step up to dedicated legal guidance and brand enforcement tools.',

                        'features' => [

                            '1-on-1 Attorney Consultation: Speak directly with a trademark lawyer during a focused 15-minute session to address your specific brand questions.',

                            'Cease & Desist Safeguards: Receive formal documentation to take immediate action if another business attempts to infringe on your name.',

                        ],

                        'active' => true,

                        'badge' => 'ENHANCED PROTECTION',

                        'button' => 'Choose Standard',

                        'link' => route('contact'),
                    ],

                    [
                        'title' => 'Premium Package',

                        'price' => 539,

                        'description' => 'The gold standard for rapid filing and long-term brand monitoring.',

                        'features' => [

                            'Comprehensive Strategy Session: An extended 1-hour consultation with a trademark attorney for deep-dive legal planning.',

                            '48-Hour Priority Rush Processing: Fast-track your application structure to lock in your official filing date as quickly as possible.',

                            'Continuous Infringement Monitoring: Alerts to safeguard your registered mark from copycats (free trial included).',

                        ],

                        'active' => false,

                        'button' => 'Choose Premium',

                        'link' => route('contact'),
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | Authority
                |--------------------------------------------------------------------------
                */
                'authorityTitle' => 'Key Renewal Milestones Required by Law',

                'authorityLeftIcon' => 'fa-regular fa-file-lines',

                'authorityLeftTitle' => '5th-6th Year Declaration (Section 8)',

                'authorityLeftItems' => [

                    'Verifies continuous commercial use during your initial 5-year registration period',

                    'Option to submit Section 15 to gain powerful Incontestable status',

                    'Essential legal step required to keep your registration active through year 10',

                ],

                'authorityRightTitle' => '10-Year Renewal & Extension (Section 8 & 9)',

                'authorityRightDescription' => 'Every decade, trademark owners must file a combined Section 8 Declaration of Use and Section 9 Application for Renewal. This maintains your exclusive federal ownership indefinitely, guaranteeing that your brand remains permanently protected across all 50 states.',

                /*
                |--------------------------------------------------------------------------
                | Testimonials
                |--------------------------------------------------------------------------
                */

                'testimonialTitle' => 'Trusted Renewal & Maintenance Support',

                'testimonials' => [

                    [
                        'stars' => 5,
                        'review' => 'USA Trademark Expert handled our 5-year Section 8 filing flawlessly. They audited our specimen of use and submitted everything to the USPTO with zero hassle.',
                        'name' => 'H. Sterling',
                        'designation' => 'Operations Director',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'We almost missed our 10-year renewal window, but their team flagged it in time, prepared our combined Section 8 & 9 papers, and saved us from major USPTO late penalties.',
                        'name' => 'E. Nygard',
                        'designation' => 'Brand Founder',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'Filing our Declaration of Incontestability through them was seamless. Clear guidance on commercial proof and incredibly fast processing from start to finish.',
                        'name' => 'A. Patel',
                        'designation' => 'E-Commerce Owner',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'USA Trademark Expert handled our 5-year Section 8 filing flawlessly. They audited our specimen of use and submitted everything to the USPTO with zero hassle.',
                        'name' => 'H. Sterling',
                        'designation' => 'Operations Director',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'We almost missed our 10-year renewal window, but their team flagged it in time, prepared our combined Section 8 & 9 papers, and saved us from major USPTO late penalties.',
                        'name' => 'E. Nygard',
                        'designation' => 'Brand Founder',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'Filing our Declaration of Incontestability through them was seamless. Clear guidance on commercial proof and incredibly fast processing from start to finish.',
                        'name' => 'A. Patel',
                        'designation' => 'E-Commerce Owner',
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | FAQs
                |--------------------------------------------------------------------------
                */
                'faqTitle' => 'Frequently Asked Questions',

                'faqs' => [

                    [
                        'question' => 'How long does a federal trademark registration last?',
                        'answer' => '<p>A federal trademark registration can last indefinitely, provided you file required maintenance documents with the USPTO at specific time intervals and continue using the mark in commerce.</p>'
                    ],

                    [
                        'question' => "When do I need to submit my first trademark maintenance filing?",
                        'answer' => '<p>Your first mandatory filing occurs between the 5th and 6th years after registration. You must submit a Section 8 Declaration of Continued Use proving your brand is still active in the market.</p>'
                    ],

                    [
                        'question' => 'What is the difference between a Section 8 and Section 9 filing?',
                        'answer' => '<p>A Section 8 Declaration is a sworn statement confirming continuous commercial use, while a Section 9 Application is a formal request to renew the registration for another 10-year period.</p>'
                    ],

                    [
                        'question' => 'What happens if I miss my renewal deadline?',
                        'answer' => "<p>The USPTO provides a 6-month grace period after the deadline, though late filings incur additional government surcharges. If the grace period expires without filing, your registration is permanently canceled.</p>"
                    ],

                    [
                        'question' => 'What is a Section 15 Declaration of Incontestability?',
                        'answer' => '<p>After 5 consecutive years of active registration, you can file a Section 15 declaration alongside Section 8. This grants your mark "Incontestable" status, making it immune to most third-party legal challenges.</p>'
                    ],

                    [
                        'question' => 'What proof or specimen is required for a renewal?',
                        'answer' => '<p>You must provide a clear, real-world specimen showing how your mark is currently used in commerce, such as product packaging, branded tags, or a live website offering your services.</p>',
                    ],

                    [
                        'question' => 'Can I update my logo or business name during a renewal?',
                        'answer' => '<p>No. USPTO renewals only cover the trademark exactly as originally registered. If your logo or name design has undergone significant changes, a new trademark application must be submitted.</p>'
                    ],

                    [
                        'question' => 'What if my business is temporarily not using the trademark?',
                        'answer' => '<p>If special circumstances prevent commercial use, you may file a Section 8 claiming "Excusable Non-Use." You must provide legal justification showing the interruption is temporary and unintentional.</p>'
                    ],

                    [
                        'question' => 'How long does the USPTO take to process a renewal?',
                        'answer' => '<p>Once submitted, the USPTO generally reviews and approves maintenance declarations within 1 to 3 months. Your active registration remains protected throughout the processing period.</p>'
                    ],

                    [
                        'question' => 'Why should I hire USA Trademark Expert instead of renewing myself?',
                        'answer' => '<p>Filing errors or submitting non-compliant specimens can lead to immediate USPTO rejections and lost filing fees. Our team audits your proof of use and ensures every document meets strict federal guidelines.</p>'
                    ],

                ],
            ],

            'office-action-response' => [
                /*
                |--------------------------------------------------------------------------
                | Meta
                |--------------------------------------------------------------------------
                */
                'metaTitle' => 'Federal Trademark Registration',
                'metaDescription' => 'Protect your brand name, logo, or slogan nationwide with seamless, attorney-assisted USPTO filing.',

                /*
                |--------------------------------------------------------------------------
                | Hero
                |--------------------------------------------------------------------------
                */

                'heroTitle' => 'USPTO Office Action Response',

                'heroDescription' => 'Overcome legal refusals, procedural objections, and examiner requirements to keep your trademark application moving toward registration.',

                'heroFeatures' => [
                    "In-Depth Refusal Analysis: Comprehensive review of the examining attorney's legal objections.",
                    'Custom Legal Argumentation: Professional drafting of response briefs, amendments, and evidence.',
                    'On-Time USPTO Filing: Compliant submissions that safeguard your priority filing date.',
                ],

                'heroButtonText' => 'Resolve Your Office Action',

                'heroButtonLink' => route('contact'),

                'heroImage' => asset('assets/images/services/service-banner.png'),

                /*
                |--------------------------------------------------------------------------
                | Process
                |--------------------------------------------------------------------------
                */
                'processTitle' => 'Why Is a Structured Response Critical?',

                'processDescription' => 'Receiving an Office Action does not mean your trademark is denied. A prompt, well-reasoned legal response can successfully overcome USPTO objections.',

                'processCards' => [

                    [
                        'title' => 'Prevent Application Abandonment',
                        'description' => 'Failing to respond before strict USPTO deadlines results in automatic application abandonment, causing you to lose your filing fees and priority registration rights.',
                    ],

                    [
                        'title' => 'Overcome Substantive Refusals',
                        'description' => 'Whether facing "Likelihood of Confusion" or "Descriptiveness" refusals, targeted legal arguments and precedent analysis give your application the best path to approval.',
                    ],

                    [
                        'title' => 'Fix Technical & Specimen Issues',
                        'description' => 'Correct goods/services classifications, submit acceptable commercial specimens, and address administrative requirements cleanly to keep your filing on track.',
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | Extension
                |--------------------------------------------------------------------------
                */
                'extensionTitle' => 'Overcoming USPTO Examiner Refusals',

                'extensionDescription' => "Receiving an Office Action means the USPTO examining attorney has identified legal obstacles or administrative errors that must be resolved. Submitting a structured legal response allows you to address examiner objections, modify your application details, and defend your brand's right to full registration.",

                'extensionInsightTitle' => 'KEY INSIGHT:',

                'extensionInsight' => 'Most USPTO Office Actions come with strict 3-month response windows. Missing your assigned deadline causes your application to automatically fail and forfeit your priority status.',

                'extensionPrimaryButtonText' => 'Resolve Office Action',

                'extensionPrimaryButtonLink' => route('contact'),

                'extensionSecondaryButtonText' => 'Learn More',

                'extensionSecondaryButtonLink' => '#',

                'extensionImage' => asset('assets/images/services/extension.png'),

                'extensionCards' => [

                    [
                        'icon' => 'fa-solid fa-file-lines',
                        'title' => 'Targeted Argument Briefs',
                    ],

                    [
                        'icon' => 'fa-solid fa-shield-halved',
                        'title' => 'Specimen & Class Fixes',
                    ],

                    [
                        'icon' => 'fa-solid fa-scale-balanced',
                        'title' => 'Strict Deadline Compliance',
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | Pricing
                |--------------------------------------------------------------------------
                */
                'pricingPackages' => [

                    [
                        'title' => 'Basic Package',

                        'price' => 49,

                        'description' => 'Straightforward filing tools to get your application officially submitted.',

                        'features' => [

                            'Federal Database Direct-Hit Search:
                            We scan the USPTO registry to check your mark’s availability and flag immediate conflicts.',

                            'Custom Legal Classification:
                            Our team reviews the USPTO ID manual to precisely categorize your goods and services for maximum protection.',

                        ],

                        'active' => false,

                        'button' => 'Choose Basic',

                        'link' => route('contact'),
                    ],

                    [
                        'title' => 'Standard Package',

                        'price' => 299,

                        'description' => 'Step up to dedicated legal guidance and brand enforcement tools.',

                        'features' => [

                            '1-on-1 Attorney Consultation: Speak directly with a trademark lawyer during a focused 15-minute session to address your specific brand questions.',

                            'Cease & Desist Safeguards: Receive formal documentation to take immediate action if another business attempts to infringe on your name.',

                        ],

                        'active' => true,

                        'badge' => 'ENHANCED PROTECTION',

                        'button' => 'Choose Standard',

                        'link' => route('contact'),
                    ],

                    [
                        'title' => 'Premium Package',

                        'price' => 539,

                        'description' => 'The gold standard for rapid filing and long-term brand monitoring.',

                        'features' => [

                            'Comprehensive Strategy Session: An extended 1-hour consultation with a trademark attorney for deep-dive legal planning.',

                            '48-Hour Priority Rush Processing: Fast-track your application structure to lock in your official filing date as quickly as possible.',

                            'Continuous Infringement Monitoring: Alerts to safeguard your registered mark from copycats (free trial included).',

                        ],

                        'active' => false,

                        'button' => 'Choose Premium',

                        'link' => route('contact'),
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | Authority
                |--------------------------------------------------------------------------
                */
                'authorityTitle' => 'Non-Final vs. Final USPTO Office Actions',

                'authorityLeftIcon' => 'fa-regular fa-file-lines',

                'authorityLeftTitle' => 'Non-Final Office Action',

                'authorityLeftItems' => [

                    'Issued when an examiner raises initial legal or procedural issues',

                    'Opportunity to amend classifications, specimens, or legal arguments',

                    'Must be answered within the mandatory 3-month filing window',

                ],

                'authorityRightTitle' => 'Final Office Action Response',

                'authorityRightDescription' => 'If an examiner maintains their refusal after an initial response, a Final Office Action is issued. Overcoming a final refusal requires filing a Request for Reconsideration or initiating a formal appeal before the Trademark Trial and Appeal Board (TTAB) to keep your registration alive.',

                /*
                |--------------------------------------------------------------------------
                | Testimonials
                |--------------------------------------------------------------------------
                */

                'testimonialTitle' => 'Proven Success Overcoming USPTO Refusals',

                'testimonials' => [

                    [
                        'stars' => 5,
                        'review' => "We received a 'Likelihood of Confusion' refusal and thought our brand name was lost. USA Trademark Expert drafted a compelling legal argument that convinced the examiner to approve our mark!",
                        'name' => 'J. Sterling',
                        'designation' => 'E-Commerce Brand Owner',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'Our application was flagged for specimen issues and classification errors. Their legal team corrected the descriptions, submitted compliant specimens, and got us back on track.',
                        'name' => 'K. Reynolds',
                        'designation' => 'Tech Startup Founder',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'Fast, professional, and clear communication. They filed our response well before the 3-month USPTO deadline and saved us from losing our priority application date.',
                        'name' => 'A. Vance',
                        'designation' => 'Creative Director',
                    ],

                    [
                        'stars' => 5,
                        'review' => "We received a 'Likelihood of Confusion' refusal and thought our brand name was lost. USA Trademark Expert drafted a compelling legal argument that convinced the examiner to approve our mark!",
                        'name' => 'J. Sterling',
                        'designation' => 'E-Commerce Brand Owner',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'Our application was flagged for specimen issues and classification errors. Their legal team corrected the descriptions, submitted compliant specimens, and got us back on track.',
                        'name' => 'K. Reynolds',
                        'designation' => 'Tech Startup Founder',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'Fast, professional, and clear communication. They filed our response well before the 3-month USPTO deadline and saved us from losing our priority application date.',
                        'name' => 'A. Vance',
                        'designation' => 'Creative Director',
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | FAQs
                |--------------------------------------------------------------------------
                */
                'faqTitle' => 'Frequently Asked Questions',

                'faqs' => [

                    [
                        'question' => 'What is a USPTO Office Action?',
                        'answer' => '<p>A USPTO Office Action is an official notification issued by an examining attorney detailing legal, technical, or procedural reasons why a trademark application cannot be registered as currently submitted.</p>'
                    ],

                    [
                        'question' => 'What is the difference between a procedural and substantive Office Action?',
                        'answer' => '<p>Procedural Office Actions address minor administrative issues—such as adjusting goods/services descriptions or providing a better specimen. Substantive Office Actions involve complex legal refusals, such as likelihood of confusion or descriptiveness.</p>'
                    ],

                    [
                        'question' => 'How long do I have to respond to an Office Action?',
                        'answer' => '<p>The USPTO strictly enforces a 3-month response window from the date the Office Action is issued. A single 1-month extension can be requested for a fee, but missing the deadline entirely results in abandonment.</p>'
                    ],

                    [
                        'question' => 'What happens if I do not respond to an Office Action?',
                        'answer' => '<p>If you fail to file a complete response before your assigned deadline, the USPTO will mark your application as abandoned, forfeiting your filing fees and surrendering your priority date.</p>'
                    ],

                    [
                        'question' => 'What is a "Likelihood of Confusion" (Section 2(d)) refusal?',
                        'answer' => '<p>This substantive refusal occurs when the USPTO examiner determines your mark is phonetically, visually, or conceptually too similar to a pre-existing registered trademark in a related industry.</p>'
                    ],

                    [
                        'question' => 'What is a "Merely Descriptive" (Section 2(e)(1)) refusal?',
                        'answer' => '<p>A descriptiveness refusal is issued if your proposed mark simply describes a feature, function, quality, or ingredient of your goods or services, rather than acting as a unique brand identifier.</p>'
                    ],

                    [
                        'question' => 'Can I fix a specimen refusal in an Office Action?',
                        'answer' => '<p>Yes. If your original specimen was rejected for improper formatting or lack of commercial proof, you can submit a verified "Substitute Specimen" demonstrating actual real-world use of your mark.</p>'
                    ],

                    [
                        'question' => 'What is a Final Office Action?',
                        'answer' => '<p>A Final Office Action is issued when an examiner maintains their refusal after reviewing your initial response. At this stage, your options are filing a Request for Reconsideration or appealing to the TTAB.</p>'
                    ],

                    [
                        'question' => 'Can I modify my mark or services to satisfy the examiner?',
                        'answer' => '<p>You can narrow or clarify your list of goods/services to avoid conflicts. However, USPTO rules do not allow material alterations to the visual appearance or wording of your trademark once filed.</p>'
                    ],

                    [
                        'question' => 'Why should I hire USA Trademark Expert to respond?',
                        'answer' => '<p>Overcoming legal refusals requires precise knowledge of trademark law, precedent cases, and USPTO guidelines. Our team crafts tailored legal arguments that give your application the best possible chance of approval.</p>'
                    ],
                ],
            ],

            'filing-an-extension' => [
                /*
                |--------------------------------------------------------------------------
                | Meta
                |--------------------------------------------------------------------------
                */
                'metaTitle' => 'Federal Trademark Registration',
                'metaDescription' => 'Protect your brand name, logo, or slogan nationwide with seamless, attorney-assisted USPTO filing.',

                /*
                |--------------------------------------------------------------------------
                | Hero
                |--------------------------------------------------------------------------
                */

                'heroTitle' => 'USPTO Statement of Use Filing',

                'heroDescription' => 'Submit verified proof of commercial use to convert your pending "Intent-to-Use" application into an officially registered trademark.',

                'heroFeatures' => [
                    'Specimen Compliance Audit: Ensure your product packaging, labeling, or digital store meets USPTO standards.',
                    'First Use Date Verification: Accurately record your dates of first commercial use for maximum legal weight.',
                    "Notice of Allowance Filing: Swift submission following your application's formal USPTO approval.",
                ],

                'heroButtonText' => 'File Statement of Use',

                'heroButtonLink' => route('contact'),

                'heroImage' => asset('assets/images/services/service-banner.png'),

                /*
                |--------------------------------------------------------------------------
                | Process
                |--------------------------------------------------------------------------
                */
                'processTitle' => 'Why Is an SOU Filing Mandatory?',

                'processDescription' => 'An "Intent-to-Use" filing reserves your name early, but submitting an official Statement of Use (SOU) is required to secure your final registration certificate.',

                'processCards' => [

                    [
                        'title' => 'Final Step to Registration',
                        'description' => 'Submitting your SOU provides the USPTO with required proof of real-world sales, triggering the issuance of your official Certificate of Registration.',
                    ],

                    [
                        'title' => 'Solidify Commercial Priority',
                        'description' => 'Formally establishing your dates of first commercial use locks in your legal nationwide priority over later market competitors.',
                    ],

                    [
                        'title' => 'Prevent Application Abandonment',
                        'description' => 'Failing to submit acceptable proof of commercial use within 6 months of receiving your Notice of Allowance results in automatic application abandonment.',
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | Extension
                |--------------------------------------------------------------------------
                */
                'extensionTitle' => 'Proving Commercial Use for Federal Registration',

                'extensionDescription' => 'Once the USPTO issues a Notice of Allowance for your "Intent-to-Use" application, you must provide verified proof of active commercial sales. Our team audits your commercial specimens, prepares your sworn declaration of use, and submits your SOU to lock in your federal registration certificate.',

                'extensionInsightTitle' => 'KEY INSIGHT:',

                'extensionInsight' => 'Improper or non-compliant specimens are the #1 cause of SOU rejection. Submitting clear, compliant proof—such as branded product packaging or live e-commerce checkout pages—ensures swift examiner approval.',

                'extensionPrimaryButtonText' => 'Submit Statement of Use',

                'extensionPrimaryButtonLink' => route('contact'),

                'extensionSecondaryButtonText' => 'Learn More',

                'extensionSecondaryButtonLink' => '#',

                'extensionImage' => asset('assets/images/services/extension.png'),

                'extensionCards' => [

                    [
                        'icon' => 'fa-solid fa-file-lines',
                        'title' => 'Notice of Allowance Compliance',
                    ],

                    [
                        'icon' => 'fa-solid fa-shield-halved',
                        'title' => 'Verified Specimen Review',
                    ],

                    [
                        'icon' => 'fa-solid fa-scale-balanced',
                        'title' => 'Date of First Use Lock-In',
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | Pricing
                |--------------------------------------------------------------------------
                */
                'pricingPackages' => [

                    [
                        'title' => 'Basic Package',

                        'price' => 49,

                        'description' => 'Straightforward filing tools to get your application officially submitted.',

                        'features' => [

                            'Federal Database Direct-Hit Search:
                            We scan the USPTO registry to check your mark’s availability and flag immediate conflicts.',

                            'Custom Legal Classification:
                            Our team reviews the USPTO ID manual to precisely categorize your goods and services for maximum protection.',

                        ],

                        'active' => false,

                        'button' => 'Choose Basic',

                        'link' => route('contact'),
                    ],

                    [
                        'title' => 'Standard Package',

                        'price' => 299,

                        'description' => 'Step up to dedicated legal guidance and brand enforcement tools.',

                        'features' => [

                            '1-on-1 Attorney Consultation: Speak directly with a trademark lawyer during a focused 15-minute session to address your specific brand questions.',

                            'Cease & Desist Safeguards: Receive formal documentation to take immediate action if another business attempts to infringe on your name.',

                        ],

                        'active' => true,

                        'badge' => 'ENHANCED PROTECTION',

                        'button' => 'Choose Standard',

                        'link' => route('contact'),
                    ],

                    [
                        'title' => 'Premium Package',

                        'price' => 539,

                        'description' => 'The gold standard for rapid filing and long-term brand monitoring.',

                        'features' => [

                            'Comprehensive Strategy Session: An extended 1-hour consultation with a trademark attorney for deep-dive legal planning.',

                            '48-Hour Priority Rush Processing: Fast-track your application structure to lock in your official filing date as quickly as possible.',

                            'Continuous Infringement Monitoring: Alerts to safeguard your registered mark from copycats (free trial included).',

                        ],

                        'active' => false,

                        'button' => 'Choose Premium',

                        'link' => route('contact'),
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | Authority
                |--------------------------------------------------------------------------
                */
                'authorityTitle' => 'Statement of Use (SOU) vs. Amendment to Allege Use (AAU)',

                'authorityLeftIcon' => 'fa-regular fa-file-lines',

                'authorityLeftTitle' => 'Statement of Use (SOU)',

                'authorityLeftItems' => [

                    'Filed AFTER the USPTO completes examination and issues a Notice of Allowance',

                    'Must be filed within 6 months of the Notice of Allowance date (unless extended)',

                    'Final requirement to convert an Intent-to-Use filing into an active registration',

                ],

                'authorityRightTitle' => 'Amendment to Allege Use (AAU)',

                'authorityRightDescription' => 'If your goods or services launch BEFORE your application is approved for publication, you can file an Amendment to Allege Use (AAU). Filing an AAU submits your commercial proof earlier in the timeline, accelerating your path to official trademark registration.',

                /*
                |--------------------------------------------------------------------------
                | Testimonials
                |--------------------------------------------------------------------------
                */

                'testimonialTitle' => 'Seamless Path to Full Registration',

                'testimonials' => [

                    [
                        'stars' => 5,
                        'review' => "I wasn't sure if my website screenshots qualified as acceptable specimens. USA Trademark Expert audited my proof, prepared the filing, and got my SOU approved without a hitch.",
                        'name' => 'R. Sterling',
                        'designation' => 'E-Commerce Brand Founder',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'When our Notice of Allowance arrived, we only had a few weeks left to submit our commercial proof. They handled everything quickly and secured our official registration certificate.',
                        'name' => 'K. Patel',
                        'designation' => 'Consumer Goods Creator',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'Super helpful team! They guided us on exact dates of first use and ensured our product packaging labels met strict federal guidelines.',
                        'name' => 'A. Ross',
                        'designation' => 'Mobile App Developer',
                    ],

                    [
                        'stars' => 5,
                        'review' => "I wasn't sure if my website screenshots qualified as acceptable specimens. USA Trademark Expert audited my proof, prepared the filing, and got my SOU approved without a hitch.",
                        'name' => 'R. Sterling',
                        'designation' => 'E-Commerce Brand Founder',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'When our Notice of Allowance arrived, we only had a few weeks left to submit our commercial proof. They handled everything quickly and secured our official registration certificate.',
                        'name' => 'K. Patel',
                        'designation' => 'Consumer Goods Creator',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'Super helpful team! They guided us on exact dates of first use and ensured our product packaging labels met strict federal guidelines.',
                        'name' => 'A. Ross',
                        'designation' => 'Mobile App Developer',
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | FAQs
                |--------------------------------------------------------------------------
                */
                'faqTitle' => 'Frequently Asked Questions',

                'faqs' => [

                    [
                        'question' => 'What is a USPTO Statement of Use (SOU)?',
                        'answer' => '<p>A Statement of Use is a mandatory sworn filing submitted to the USPTO that includes physical or digital evidence (specimens) proving your trademark is actively used in commercial trade across state or international borders.</p>'
                    ],

                    [
                        'question' => 'When am I required to submit a Statement of Use?',
                        'answer' => '<p>You must submit an SOU after the USPTO completes its initial review and issues a Notice of Allowance for your "Intent-to-Use" trademark application.</p>'
                    ],

                    [
                        'question' => 'What counts as an acceptable specimen for physical products (goods)?',
                        'answer' => '<p>Acceptable specimens for goods include actual product packaging, stamped labels, hanging tags, or direct e-commerce website screenshots where customers can purchase the item.</p>'
                    ],

                    [
                        'question' => 'What counts as an acceptable specimen for services?',
                        'answer' => '<p>Acceptable specimens for services include marketing brochures, official company websites displaying service descriptions, signed commercial contracts, or promotional signage featuring the trademark.</p>'
                    ],

                    [
                        'question' => 'What is the difference between "First Use Anywhere" and "First Use in Commerce"?',
                        'answer' => '<p>"First Use Anywhere" is the date you first used the mark anywhere on a product or service. "First Use in Commerce" is the date you first sold or rendered those goods/services across state, territorial, or international borders.</p>'
                    ],

                    [
                        'question' => 'What happens if the USPTO examiner rejects my specimen?',
                        'answer' => '<p>If the examiner rejects your specimen, they will issue an Office Action detailing the reason. We can help you submit a substitute specimen or file an amendment to resolve the refusal without forfeiting your mark.</p>'
                    ],

                    [
                        'question' => 'Can I delete specific goods or services when filing my SOU?',
                        'answer' => '<p>Yes. If you are not yet selling all items listed in your original application, you can permanently remove inactive items to allow the active products or services to proceed to full registration.</p>'
                    ],

                    [
                        'question' => 'How much time do I have to file my SOU after receiving a Notice of Allowance?',
                        'answer' => '<p>You have an initial 6-month window from the exact date your Notice of Allowance is issued. If you need more time to launch, you can file a 6-month extension request before that deadline expires.</p>'
                    ],

                    [
                        'question' => 'How long after submitting an SOU will I receive my Certificate of Registration?',
                        'answer' => '<p>Once submitted, the USPTO examiner typically reviews your specimen within 1 to 2 months. Upon approval, your official Certificate of Registration is issued shortly after.</p>'
                    ],

                    [
                        'question' => 'Why should I use USA Trademark Expert for my SOU submission?',
                        'answer' => '<p>Submitting non-compliant specimens or inaccurate first-use dates can invalidate your registration. We pre-audit your evidence, draft proper declarations, and submit your paperwork to ensure first-time acceptance.</p>'
                    ],
                ],
            ],

            'comprehensive-trademark-search' => [
                /*
                |--------------------------------------------------------------------------
                | Meta
                |--------------------------------------------------------------------------
                */
                'metaTitle' => 'Federal Trademark Registration',
                'metaDescription' => 'Protect your brand name, logo, or slogan nationwide with seamless, attorney-assisted USPTO filing.',

                /*
                |--------------------------------------------------------------------------
                | Hero
                |--------------------------------------------------------------------------
                */

                'heroTitle' => 'Comprehensive Trademark Search',

                'heroDescription' => 'Perform an exhaustive clearance search across federal, state, and common law databases to protect your application from costly USPTO refusals.',

                'heroFeatures' => [
                    'Multi-Tier Database Scans: Exhaustive checks across USPTO filings, state business registries, and live digital markets.',
                    'Risk Assessment Report: Detailed evaluation highlighting potential phonetic, visual, and conceptual conflicts.',
                    'Strategic Guidance: Actionable insights to refine your mark and maximize approval odds before you file.',
                ],

                'heroButtonText' => 'Perform Search Now',

                'heroButtonLink' => route('contact'),

                'heroImage' => asset('assets/images/services/service-banner.png'),

                /*
                |--------------------------------------------------------------------------
                | Process
                |--------------------------------------------------------------------------
                */
                'processTitle' => 'Why Is Active Brand Monitoring Essential?',

                'processDescription' => 'Millions of active marks exist nationwide. A thorough pre-filing clearance audit ensures your brand name or logo is legally available before investing in registration.',

                'processCards' => [

                    [
                        'title' => 'Why Is Active Brand Monitoring Essential?',
                        'description' => 'USPTO application filing fees are strictly non-refundable whether your mark is approved or rejected. Searching upfront prevents wasting money on an unavailable name.',
                    ],

                    [
                        'title' => 'Uncover Hidden Common Law Risks',
                        'description' => 'Businesses using unregistered names still hold enforceable "common law" rights. Deep scans flag unregistered commercial uses that could lead to future legal disputes.',
                    ],

                    [
                        'title' => 'Prevent Confusion Refusals',
                        'description' => 'Examining attorneys reject applications that sound or look confusingly similar to pre-existing marks. Pre-filing search reports let you adapt your mark early to pass review smoothly.',
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | Extension
                |--------------------------------------------------------------------------
                */
                'extensionTitle' => 'Uncovering Hidden Legal Conflicts Before You File',

                'extensionDescription' => "A basic search engine query isn't enough to guarantee your trademark is clear. Our comprehensive clearance audit delves deep into federal USPTO records, state corporate filings, domain databases, and common law commercial usage to uncover phonetic, visual, or conceptual overlaps that could derail your registration.",

                'extensionInsightTitle' => 'KEY INSIGHT:',

                'extensionInsight' => 'Over 80% of USPTO application refusals stem from "Likelihood of Confusion" with existing marks—conflicts that a professional clearance search identifies before you spend time and filing fees.',

                'extensionPrimaryButtonText' => 'Run Clearance Search',

                'extensionPrimaryButtonLink' => route('contact'),

                'extensionSecondaryButtonText' => 'Learn More',

                'extensionSecondaryButtonLink' => '#',

                'extensionImage' => asset('assets/images/services/extension.png'),

                'extensionCards' => [

                    [
                        'icon' => 'fa-solid fa-file-lines',
                        'title' => 'Federal & State Registries',
                    ],

                    [
                        'icon' => 'fa-solid fa-shield-halved',
                        'title' => 'Common Law & Digital Scans',
                    ],

                    [
                        'icon' => 'fa-solid fa-scale-balanced',
                        'title' => 'Comprehensive Risk Report',
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | Pricing
                |--------------------------------------------------------------------------
                */
                'pricingPackages' => [

                    [
                        'title' => 'Basic Package',

                        'price' => 49,

                        'description' => 'Straightforward filing tools to get your application officially submitted.',

                        'features' => [

                            'Federal Database Direct-Hit Search:
                            We scan the USPTO registry to check your mark’s availability and flag immediate conflicts.',

                            'Custom Legal Classification:
                            Our team reviews the USPTO ID manual to precisely categorize your goods and services for maximum protection.',

                        ],

                        'active' => false,

                        'button' => 'Choose Basic',

                        'link' => route('contact'),
                    ],

                    [
                        'title' => 'Standard Package',

                        'price' => 299,

                        'description' => 'Step up to dedicated legal guidance and brand enforcement tools.',

                        'features' => [

                            '1-on-1 Attorney Consultation: Speak directly with a trademark lawyer during a focused 15-minute session to address your specific brand questions.',

                            'Cease & Desist Safeguards: Receive formal documentation to take immediate action if another business attempts to infringe on your name.',

                        ],

                        'active' => true,

                        'badge' => 'ENHANCED PROTECTION',

                        'button' => 'Choose Standard',

                        'link' => route('contact'),
                    ],

                    [
                        'title' => 'Premium Package',

                        'price' => 539,

                        'description' => 'The gold standard for rapid filing and long-term brand monitoring.',

                        'features' => [

                            'Comprehensive Strategy Session: An extended 1-hour consultation with a trademark attorney for deep-dive legal planning.',

                            '48-Hour Priority Rush Processing: Fast-track your application structure to lock in your official filing date as quickly as possible.',

                            'Continuous Infringement Monitoring: Alerts to safeguard your registered mark from copycats (free trial included).',

                        ],

                        'active' => false,

                        'button' => 'Choose Premium',

                        'link' => route('contact'),
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | Authority
                |--------------------------------------------------------------------------
                */
                'authorityTitle' => 'Basic Federal Search vs. Comprehensive Clearance Search',

                'authorityLeftIcon' => 'fa-regular fa-file-lines',

                'authorityLeftTitle' => 'Standard USPTO Direct Search',

                'authorityLeftItems' => [

                    'Scans only active federal USPTO registrations and pending applications',

                    'Identifies exact name matches and basic spelling direct conflicts',

                    'Misses state-level filings, common law commercial use, and digital brand presence',

                ],

                'authorityRightTitle' => 'Multi-Tier Comprehensive Audit',

                'authorityRightDescription' => 'Our deep clearance search examines federal databases, all 50 state corporate registries, domain name records, e-commerce platforms, and common law business directories. It evaluates phonetic similarities, translated meanings, and industry classifications to give you complete filing confidence.',

                /*
                |--------------------------------------------------------------------------
                | Testimonials
                |--------------------------------------------------------------------------
                */

                'testimonialTitle' => 'Detailed Insights Before You File',

                'testimonials' => [

                    [
                        'stars' => 5,
                        'review' => 'The clearance report uncovered a registered mark with a similar pronunciation that we completely missed. They saved us thousands in non-refundable USPTO filing fees!',
                        'name' => 'B. Aris',
                        'designation' => 'Brand Strategy Lead',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'Comprehensive and eye-opening! They flagged an unregistered common law user in our industry, allowing us to tweak our logo slightly before submitting our application.',
                        'name' => 'L. Hallowell',
                        'designation' => 'E-Commerce Founder',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'Their multi-tier report gave us a clear risk score and actionable legal recommendations. We applied to the USPTO with total confidence and got approved on the first try.',
                        'name' => 'K. Nguyen',
                        'designation' => 'Tech Entrepreneur',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'The clearance report uncovered a registered mark with a similar pronunciation that we completely missed. They saved us thousands in non-refundable USPTO filing fees!',
                        'name' => 'B. Aris',
                        'designation' => 'Brand Strategy Lead',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'Comprehensive and eye-opening! They flagged an unregistered common law user in our industry, allowing us to tweak our logo slightly before submitting our application.',
                        'name' => 'L. Hallowell',
                        'designation' => 'E-Commerce Founder',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'Their multi-tier report gave us a clear risk score and actionable legal recommendations. We applied to the USPTO with total confidence and got approved on the first try.',
                        'name' => 'K. Nguyen',
                        'designation' => 'Tech Entrepreneur',
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | FAQs
                |--------------------------------------------------------------------------
                */
                'faqTitle' => 'Frequently Asked Questions',

                'faqs' => [
                    [
                        'question' => 'What is a comprehensive trademark clearance search?',
                        'answer' => '<p>A comprehensive clearance search is an exhaustive audit of federal, state, domain, and common law databases designed to identify potential legal conflicts before you submit your trademark application to the USPTO.</p>'
                    ],
                    [
                        'question' => "Why isn't a basic search engine query or free USPTO search enough?",
                        'answer' => '<p>Basic searches usually only check for exact name matches. A comprehensive search evaluates phonetic similarities, alternative spellings, visual designs, translated meanings, and unregistered common law commercial uses.</p>'
                    ],
                    [
                        'question' => 'What databases are included in a multi-tier search?',
                        'answer' => '<p>Our search examines active and pending federal USPTO registrations, all 50 U.S. state corporate registries, international domain name filings, digital marketplace handles, and broad common law commercial directories.</p>'
                    ],
                    [
                        'question' => 'What is the difference between a "knockout" search and a comprehensive search?',
                        'answer' => '<p>A "knockout" search is a preliminary check for identical direct matches in the USPTO database. A comprehensive search goes much deeper, uncovering subtle phonetic, conceptual, and common law conflicts across multiple sources.</p>'
                    ],
                    [
                        'question' => 'What does "Likelihood of Confusion" mean in a search report?',
                        'answer' => '<p>It refers to the primary legal standard used by the USPTO. If two trademarks sound, look, or mean something similar and are used in related industries, consumers might be confused—leading to application refusal.</p>'
                    ],
                    [
                        'question' => 'What are "Common Law" trademark rights?',
                        'answer' => '<p>In the U.S., a business gains "common law" trademark rights simply by using a name or logo in commerce, even without federal registration. Uncovering these users prevents unexpected cease-and-desist letters later.</p>'
                    ],
                    [
                        'question' => 'How quickly will I receive my comprehensive search report?',
                        'answer' => '<p>Most comprehensive clearance reports are finalized and delivered within 1 to 3 business days, complete with risk ratings and actionable guidance for your application.</p>'
                    ],
                    [
                        'question' => 'What happens if the search finds a conflicting trademark?',
                        'answer' => '<p>If a high-risk conflict is flagged, our report provides strategic options, such as slightly adjusting your mark\'s name, narrowing your class of goods/services, or selecting an alternate brand name before filing.</p>'
                    ],
                    [
                        'question' => 'Does a clearance search guarantee my trademark will be registered?',
                        'answer' => '<p>While no search can offer a 100% guarantee, a professional clearance audit dramatically reduces your risk by identifying over 80% of common legal obstacles before you spend non-refundable USPTO fees.</p>'
                    ],
                    [
                        'question' => 'Why choose USA Trademark Expert for my search?',
                        'answer' => '<p>We combine thorough multi-tier search technology with expert analysis to deliver clean, readable risk reports and actionable strategies—ensuring you file your application with maximum confidence.</p>'
                    ],
                ],
            ],

            'copyright-registration' => [
                /*
                |--------------------------------------------------------------------------
                | Meta
                |--------------------------------------------------------------------------
                */
                'metaTitle' => 'Federal Trademark Registration',
                'metaDescription' => 'Protect your brand name, logo, or slogan nationwide with seamless, attorney-assisted USPTO filing.',

                /*
                |--------------------------------------------------------------------------
                | Hero
                |--------------------------------------------------------------------------
                */

                'heroTitle' => 'Federal Copyright Registration',

                'heroDescription' => 'Secure official public ownership and statutory protection for your original creative works, digital assets, software, and literary content.',

                'heroFeatures' => [
                    'Official Legal Record: Establish public proof of ownership with the U.S. Copyright Office.',
                    'Litigation & Damages Access: Unlock federal lawsuit eligibility and potential statutory damages for infringement.',
                    'Flawless Deposit Submission: Professional filing of application details, work descriptions, and deposit copies.',
                ],

                'heroButtonText' => 'Register Copyright Now',

                'heroButtonLink' => route('contact'),

                'heroImage' => asset('assets/images/services/service-banner.png'),

                /*
                |--------------------------------------------------------------------------
                | Process
                |--------------------------------------------------------------------------
                */
                'processTitle' => 'Why Secure Federal Copyright Registration?',

                'processDescription' => 'Although copyright exists upon creation, official registration with the U.S. Copyright Office provides essential legal enforcement power.',

                'processCards' => [

                    [
                        'title' => 'Prerequisite for Federal Lawsuits',
                        'description' => 'You cannot file an infringement lawsuit in U.S. federal court against unauthorized copiers without an official federal copyright registration.',
                    ],

                    [
                        'title' => 'Claim Up to $150,000 in Damages',
                        'description' => 'Timely registration qualifies you for statutory damages up to $150,000 per willful infringement, plus attorney fee recovery, without proving actual monetary loss.',
                    ],

                    [
                        'title' => 'Customs & Global Import Protection',
                        'description' => 'Registering allows you to record your copyright with U.S. Customs and Border Protection to seize counterfeit and infringing goods at the border.',
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | Extension
                |--------------------------------------------------------------------------
                */
                'extensionTitle' => 'Protecting Original Works & Digital Assets',

                'extensionDescription' => 'From literary works, software code, and visual graphic designs to musical compositions and digital media, official copyright registration shields your creative output from unauthorized copying, distribution, and commercial exploitation.',

                'extensionInsightTitle' => 'KEY INSIGHT:',

                'extensionInsight' => 'Registering your creative work within 3 months of public publication—or prior to any infringement—entitles you to statutory damages up to $150,000 per violation plus full attorney fee recovery.',

                'extensionPrimaryButtonText' => ' Protect Your Content',

                'extensionPrimaryButtonLink' => route('contact'),

                'extensionSecondaryButtonText' => 'Learn More',

                'extensionSecondaryButtonLink' => '#',

                'extensionImage' => asset('assets/images/services/extension.png'),

                'extensionCards' => [

                    [
                        'icon' => 'fa-solid fa-file-lines',
                        'title' => 'U.S. Copyright Office Deposit',
                    ],

                    [
                        'icon' => 'fa-solid fa-shield-halved',
                        'title' => 'Digital & Visual Asset Protection',
                    ],

                    [
                        'icon' => 'fa-solid fa-scale-balanced',
                        'title' => 'Statutory Enforcement Rights',
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | Pricing
                |--------------------------------------------------------------------------
                */
                'pricingPackages' => [

                    [
                        'title' => 'Basic Package',

                        'price' => 49,

                        'description' => 'Straightforward filing tools to get your application officially submitted.',

                        'features' => [

                            'Federal Database Direct-Hit Search:
                            We scan the USPTO registry to check your mark’s availability and flag immediate conflicts.',

                            'Custom Legal Classification:
                            Our team reviews the USPTO ID manual to precisely categorize your goods and services for maximum protection.',

                        ],

                        'active' => false,

                        'button' => 'Choose Basic',

                        'link' => route('contact'),
                    ],

                    [
                        'title' => 'Standard Package',

                        'price' => 299,

                        'description' => 'Step up to dedicated legal guidance and brand enforcement tools.',

                        'features' => [

                            '1-on-1 Attorney Consultation: Speak directly with a trademark lawyer during a focused 15-minute session to address your specific brand questions.',

                            'Cease & Desist Safeguards: Receive formal documentation to take immediate action if another business attempts to infringe on your name.',

                        ],

                        'active' => true,

                        'badge' => 'ENHANCED PROTECTION',

                        'button' => 'Choose Standard',

                        'link' => route('contact'),
                    ],

                    [
                        'title' => 'Premium Package',

                        'price' => 539,

                        'description' => 'The gold standard for rapid filing and long-term brand monitoring.',

                        'features' => [

                            'Comprehensive Strategy Session: An extended 1-hour consultation with a trademark attorney for deep-dive legal planning.',

                            '48-Hour Priority Rush Processing: Fast-track your application structure to lock in your official filing date as quickly as possible.',

                            'Continuous Infringement Monitoring: Alerts to safeguard your registered mark from copycats (free trial included).',

                        ],

                        'active' => false,

                        'button' => 'Choose Premium',

                        'link' => route('contact'),
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | Authority
                |--------------------------------------------------------------------------
                */
                'authorityTitle' => 'Unregistered Creation vs. Federal Copyright Registration',

                'authorityLeftIcon' => 'fa-regular fa-file-lines',

                'authorityLeftTitle' => 'Unregistered Creation Rights',

                'authorityLeftItems' => [

                    'Arises automatically when an original work is fixed in a tangible form',

                    'Does not permit filing an infringement lawsuit in U.S. federal court',

                    'Lacks official public proof and forfeits statutory damage claims',

                ],

                'authorityRightTitle' => 'Official Federal Registration',

                'authorityRightDescription' => 'Formal registration with the U.S. Copyright Office creates a legally recognized public record of ownership. It unlocks full federal court enforcement, empowers U.S. Customs to halt imported knockoffs, and serves as a powerful legal deterrent against unauthorized commercial copiers.',

                /*
                |--------------------------------------------------------------------------
                | Testimonials
                |--------------------------------------------------------------------------
                */

                'testimonialTitle' => 'Maximum Legal Defense for Creative Works',

                'testimonials' => [

                    [
                        'stars' => 5,
                        'review' => 'Registering our software source code was smooth and simple. USA Trademark Expert handled our deposit files correctly and got our official registration certificate fast.',
                        'name' => 'N. Vance',
                        'designation' => 'SaaS Company Founder',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'When a competitor ripped off our original graphic illustrations, having our federal copyright registered early allowed us to take immediate legal action and receive compensation.',
                        'name' => 'E. Harper',
                        'designation' => 'Illustrator & Digital Artist',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'They made registering my manuscript completely stress-free. Clear instructions on deposit requirements and continuous updates until the certificate arrived.',
                        'name' => 'G. Mercer',
                        'designation' => 'Published Author',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'Registering our software source code was smooth and simple. USA Trademark Expert handled our deposit files correctly and got our official registration certificate fast.',
                        'name' => 'N. Vance',
                        'designation' => 'SaaS Company Founder',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'When a competitor ripped off our original graphic illustrations, having our federal copyright registered early allowed us to take immediate legal action and receive compensation.',
                        'name' => 'E. Harper',
                        'designation' => 'Illustrator & Digital Artist',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'They made registering my manuscript completely stress-free. Clear instructions on deposit requirements and continuous updates until the certificate arrived.',
                        'name' => 'G. Mercer',
                        'designation' => 'Published Author',
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | FAQs
                |--------------------------------------------------------------------------
                */
                'faqTitle' => 'Frequently Asked Questions',

                'faqs' => [

                    [
                        'question' => 'What is federal copyright registration?',
                        'answer' => '<p>Federal copyright registration creates an official public record of ownership with the U.S. Copyright Office, granting the creator exclusive legal rights to reproduce, distribute, perform, and display their original work.</p>'
                    ],

                    [
                        'question' => 'What types of creative works can be copyrighted?',
                        'answer' => '<p>Copyright covers original literary works, software source code, visual arts, graphic designs, photography, musical compositions, sound recordings, architectural designs, and dramatic works.</p>'
                    ],

                    [
                        'question' => 'What is the difference between a trademark and a copyright?',
                        'answer' => '<p>Trademarks protect brand identifiers like logos, business names, and slogans used in commerce. Copyrights protect original creative, artistic, literary, or intellectual expressions fixed in a tangible medium.</p>'
                    ],

                    [
                        'question' => 'Why should I register if copyright exists automatically upon creation?',
                        'answer' => '<p>While basic copyright protection begins the moment a work is created, official registration is a mandatory legal prerequisite for filing an infringement lawsuit in U.S. federal court and recovering statutory damages.</p>'
                    ],

                    [
                        'question' => 'What are statutory damages in copyright law?',
                        'answer' => '<p>Statutory damages allow copyright owners who register before infringement (or within 3 months of publication) to recover up to $150,000 per willful violation without needing to prove actual financial loss.</p>'
                    ],

                    [
                        'question' => 'How long does a federal copyright last?',
                        'answer' => '<p>For individual creators, copyright lasts for the author\'s lifetime plus 70 years. For works made for hire or corporations, protection lasts 95 years from publication or 120 years from creation, whichever is shorter.</p>'
                    ],

                    [
                        'question' => 'What is a deposit copy?',
                        'answer' => '<p>A deposit copy is a complete visual, physical, or digital copy of the work being registered (such as a PDF manuscript, image file, or digital audio file) submitted to the U.S. Copyright Office.</p>'
                    ],

                    [
                        'question' => 'Can I register software or mobile apps?',
                        'answer' => '<p>Yes. Source code, object code, user interface designs, and app documentation can be registered as literary/visual works with the U.S. Copyright Office to protect against code duplication.</p>'
                    ],

                    [
                        'question' => 'How long does the U.S. Copyright Office take to process an application?',
                        'answer' => '<p>Processing times vary depending on examination backlog, but digital filings with online deposit uploads typically take between 2 to 6 months to receive an official Certificate of Registration.</p>'
                    ],

                    [
                        'question' => 'Why choose USA Trademark Expert for copyright registration?',
                        'answer' => '<p>We ensure your application, title classification, authorship claims, and deposit materials strictly adhere to U.S. Copyright Office requirements, eliminating processing delays and errors.</p>'
                    ],
                ],
            ],

            'trademark-search' => [
                /*
                |--------------------------------------------------------------------------
                | Meta
                |--------------------------------------------------------------------------
                */
                'metaTitle' => 'Federal Trademark Registration',
                'metaDescription' => 'Protect your brand name, logo, or slogan nationwide with seamless, attorney-assisted USPTO filing.',

                /*
                |--------------------------------------------------------------------------
                | Hero
                |--------------------------------------------------------------------------
                */

                'heroTitle' => 'Continuous Trademark Monitoring',

                'heroDescription' => 'Proactively defend your brand against unauthorized use, potential infringement, and marketplace dilution.',

                'heroFeatures' => [
                    '24/7 USPTO Database Scans: Detect newly submitted applications that closely mimic your mark.',
                    'Instant Conflict Alerts: Receive immediate notifications whenever similar filings emerge.',
                    'Proactive Defense Strategy: Take swift legal action before copycats establish market presence.',
                ],

                'heroButtonText' => 'Start Monitoring Now',

                'heroButtonLink' => route('contact'),

                'heroImage' => asset('assets/images/services/service-banner.png'),

                /*
                |--------------------------------------------------------------------------
                | Process
                |--------------------------------------------------------------------------
                */
                'processTitle' => 'Why Start with a Direct Federal Search?',

                'processDescription' => 'Before committing time and non-refundable government fees, a direct USPTO database scan acts as your essential first filter.',

                'processCards' => [

                    [
                        'title' => 'Spot Direct Conflicts Instantly',
                        'description' => 'Screen active federal records to instantly detect identical or strikingly similar mark filings in your business category.',
                    ],

                    [
                        'title' => 'Protect Your Filing Budget',
                        'description' => 'USPTO application fees are non-refundable. Screening beforehand prevents wasting money on names that are clearly unavailable.',
                    ],

                    [
                        'title' => 'Fast First-Step Clearance',
                        'description' => 'Get immediate clarity on whether your proposed mark is open for filing or if you need to pivot your brand name early.',
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | Extension
                |--------------------------------------------------------------------------
                */
                'extensionTitle' => 'Rapid Federal Clearance Screening',

                'extensionDescription' => 'A Standard Direct Search performs a targeted sweep of official USPTO databases to catch direct name overlaps, identical wordmarks, and obvious phonetic matches. It provides a swift, high-level feasibility assessment so you know right away if your proposed trademark faces immediate hurdles.',

                'extensionInsightTitle' => 'KEY INSIGHT:',

                'extensionInsight' => "Checking official USPTO records before submitting your application prevents immediate rejection for direct duplicate filings and ensures your initial filing fees aren't wasted.",

                'extensionPrimaryButtonText' => 'Run Direct Search',

                'extensionPrimaryButtonLink' => route('contact'),

                'extensionSecondaryButtonText' => 'Learn More',

                'extensionSecondaryButtonLink' => '#',

                'extensionImage' => asset('assets/images/services/extension.png'),

                'extensionCards' => [

                    [
                        'icon' => 'fa-solid fa-file-lines',
                        'title' => 'USPTO Direct Database Scan',
                    ],

                    [
                        'icon' => 'fa-solid fa-shield-halved',
                        'title' => 'Phonetic & Visual Screening',
                    ],

                    [
                        'icon' => 'fa-solid fa-scale-balanced',
                        'title' => 'Rapid Feasibility Results',
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | Pricing
                |--------------------------------------------------------------------------
                */
                'pricingPackages' => [

                    [
                        'title' => 'Basic Package',

                        'price' => 49,

                        'description' => 'Straightforward filing tools to get your application officially submitted.',

                        'features' => [

                            'Federal Database Direct-Hit Search:
                            We scan the USPTO registry to check your mark’s availability and flag immediate conflicts.',

                            'Custom Legal Classification:
                            Our team reviews the USPTO ID manual to precisely categorize your goods and services for maximum protection.',

                        ],

                        'active' => false,

                        'button' => 'Choose Basic',

                        'link' => route('contact'),
                    ],

                    [
                        'title' => 'Standard Package',

                        'price' => 299,

                        'description' => 'Step up to dedicated legal guidance and brand enforcement tools.',

                        'features' => [

                            '1-on-1 Attorney Consultation: Speak directly with a trademark lawyer during a focused 15-minute session to address your specific brand questions.',

                            'Cease & Desist Safeguards: Receive formal documentation to take immediate action if another business attempts to infringe on your name.',

                        ],

                        'active' => true,

                        'badge' => 'ENHANCED PROTECTION',

                        'button' => 'Choose Standard',

                        'link' => route('contact'),
                    ],

                    [
                        'title' => 'Premium Package',

                        'price' => 539,

                        'description' => 'The gold standard for rapid filing and long-term brand monitoring.',

                        'features' => [

                            'Comprehensive Strategy Session: An extended 1-hour consultation with a trademark attorney for deep-dive legal planning.',

                            '48-Hour Priority Rush Processing: Fast-track your application structure to lock in your official filing date as quickly as possible.',

                            'Continuous Infringement Monitoring: Alerts to safeguard your registered mark from copycats (free trial included).',

                        ],

                        'active' => false,

                        'button' => 'Choose Premium',

                        'link' => route('contact'),
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | Authority
                |--------------------------------------------------------------------------
                */
                'authorityTitle' => 'Direct Database Screening vs. Full Audit',

                'authorityLeftIcon' => 'fa-regular fa-file-lines',

                'authorityLeftTitle' => 'Targeted USPTO Direct Scan',

                'authorityLeftItems' => [

                    'Checks active and pending federal USPTO registrations',

                    'Identifies identical terms, plural variations, and direct spelling overlaps',

                    'Ideal for early-stage brand naming and quick preliminary checks',

                ],

                'authorityRightTitle' => 'When to Upgrade to Comprehensive Search',

                'authorityRightDescription' => 'While a direct federal search catches obvious USPTO collisions, it does not scan state business registries, domain databases, or common law commercial uses. If you are launching a major commercial brand, upgrading to a full clearance search offers total nationwide legal protection.',

                /*
                |--------------------------------------------------------------------------
                | Testimonials
                |--------------------------------------------------------------------------
                */

                'testimonialTitle' => 'Real Protection for Growing Brands',

                'testimonials' => [

                    [
                        'stars' => 5,
                        'review' => 'The monitoring service flagged a confusingly similar trademark application within days of its submission. We stopped a potential copycat before they could even launch.',
                        'name' => 'R. Vance',
                        'designation' => 'Founder & CEO',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'Having USA Trademark Expert monitor our mark gives us complete peace of mind. Their instant alert system keeps our entire product line protected effortlessly.',
                        'name' => 'S. Mehta',
                        'designation' => 'Operations Director',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'Essential post-registration service! Receiving regular tracking updates ensures no one quietly encroaches on our established market share.',
                        'name' => 'T. Gallagher',
                        'designation' => 'E-Commerce Retailer',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'The monitoring service flagged a confusingly similar trademark application within days of its submission. We stopped a potential copycat before they could even launch.',
                        'name' => 'R. Vance',
                        'designation' => 'Founder & CEO',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'Having USA Trademark Expert monitor our mark gives us complete peace of mind. Their instant alert system keeps our entire product line protected effortlessly.',
                        'name' => 'S. Mehta',
                        'designation' => 'Operations Director',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'Essential post-registration service! Receiving regular tracking updates ensures no one quietly encroaches on our established market share.',
                        'name' => 'T. Gallagher',
                        'designation' => 'E-Commerce Retailer',
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | FAQs
                |--------------------------------------------------------------------------
                */
                'faqTitle' => 'Frequently Asked Questions',

                'faqs' => [

                    [
                        'question' => 'What is trademark monitoring and why do I need it?',
                        'answer' => '<p>Trademark monitoring is the continuous surveillance of government databases and market registries for newly filed names, logos, or slogans that conflict with yours. It allows you to identify and stop potential copycats before their applications gain legal approval.</p>'
                    ],

                    [
                        'question' => "Doesn't the USPTO automatically block conflicting trademarks?",
                        'answer' => '<p>Not always. While USPTO examining attorneys review applications, they may not flag every potential overlap. Brand owners hold the ultimate responsibility to actively monitor, enforce, and defend their own exclusive trademark rights.</p>'
                    ],

                    [
                        'question' => 'How frequently are federal databases scanned for matches?',
                        'answer' => '<p>Our automated tracking system conducts continuous scans across official USPTO registries, evaluating phonetic, visual, and conceptual similarities to your mark as soon as new filings hit the database.</p>'
                    ],

                    [
                        'question' => 'What happens when a conflicting application is detected?',
                        'answer' => "<p>You receive an immediate alert detailing the competing mark, the applicant's information, and its potential impact on your business. Our support team then outlines the best legal steps to take.</p>"
                    ],

                    [
                        'question' => 'What is a 30-day Opposition Window?',
                        'answer' => '<p>Before a trademark is officially registered, the USPTO publishes it in the Official Gazette for 30 days. This window gives existing trademark owners the right to formally oppose and block the registration of conflicting marks.</p>'
                    ],

                    [
                        'question' => 'Can I monitor a trademark while my application is still pending?',
                        'answer' => '<p>Yes. Actively monitoring while your application is pending secures your priority filing status and ensures competing businesses do not attempt to register similar marks in the interim.</p>',
                    ],

                    [
                        'question' => 'Does trademark monitoring cover domain names and common law uses?',
                        'answer' => '<p>While federal USPTO monitoring covers primary government filings, multi-channel surveillance options can also track domain name registrations and digital marketplaces to provide broader brand safety.</p>'
                    ],

                    [
                        'question' => 'What is the difference between a clearance search and ongoing monitoring?',
                        'answer' => '<p>A pre-filing clearance search checks previously existing registrations before you apply, whereas ongoing monitoring continuously tracks future filings submitted by competitors after your mark is active.</p>'
                    ],

                    [
                        'question' => 'How do I stop someone if an alert flags an infringing mark?',
                        'answer' => '<p>Depending on how far along the conflicting application is, response strategies include submitting an official USPTO Letter of Protest, serving a formal Cease & Desist letter, or launching an Opposition Proceeding.</p>'
                    ],

                    [
                        'question' => 'Can I cancel a monitoring plan at any time?',
                        'answer' => '<p>Yes. Our monitoring services offer flexible subscription models so you can maintain active protection for as long as your brand requires continuous defense.</p>'
                    ],

                ],
            ],

            'statement-of-use' => [
                /*
                |--------------------------------------------------------------------------
                | Meta
                |--------------------------------------------------------------------------
                */
                'metaTitle' => 'Federal Trademark Registration',
                'metaDescription' => 'Protect your brand name, logo, or slogan nationwide with seamless, attorney-assisted USPTO filing.',

                /*
                |--------------------------------------------------------------------------
                | Hero
                |--------------------------------------------------------------------------
                */

                'heroTitle' => 'Statement of Use & Extension Services',

                'heroDescription' => 'Convert your "Intent-to-Use" application into a fully registered trademark or extend your filing timeline with the USPTO.',

                'heroFeatures' => [
                    'Statement of Use (SOU) Submission: Submit verified proof of commercial use to complete your registration.',
                    'Flexible 6-Month Extensions: Request additional time to launch your brand without losing priority rights.',
                    'Specimen Verification Audit: Ensure your commercial evidence meets strict federal standards.',
                ],

                'heroButtonText' => 'File SOU or Extension',

                'heroButtonLink' => route('contact'),

                'heroImage' => asset('assets/images/services/service-banner.png'),

                /*
                |--------------------------------------------------------------------------
                | Process
                |--------------------------------------------------------------------------
                */
                'processTitle' => 'Why Are SOU Filings Essential?',

                'processDescription' => 'Filing under an "Intent-to-Use" basis reserves your brand name upfront, but filing a Statement of Use or Extension is mandatory to secure registration.',

                'processCards' => [

                    [
                        'title' => 'Complete Your Registration',
                        'description' => 'Transitioning your application from pending to registered status requires submitting verified specimens showing your mark is actively used in trade.',
                    ],

                    [
                        'title' => 'Safeguard Priority Date',
                        'description' => 'Requesting timely extensions keeps your original priority filing date active while you finalize product development, branding, or official launch.',
                    ],

                    [
                        'title' => 'Prevent Application Abandonment',
                        'description' => 'Failing to submit an SOU or Extension within 6 months of receiving your Notice of Allowance causes your application to automatically abandon.',
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | Extension
                |--------------------------------------------------------------------------
                */
                'extensionTitle' => 'Converting Intent-to-Use into Active Registration',

                'extensionDescription' => 'Once the USPTO issues a Notice of Allowance for your "Intent-to-Use" application, you must demonstrate real-world commercial use. Submitting a Statement of Use with compliant specimens or requesting an official 6-month extension ensures your application stays active without forfeiting your brand rights.',

                'extensionInsightTitle' => 'KEY INSIGHT:',

                'extensionInsight' => 'You can request up to five sequential 6-month extensions—giving you up to 36 total months from your Notice of Allowance date to officially launch your products or services.',

                'extensionPrimaryButtonText' => 'Submit SOU / Extension',

                'extensionPrimaryButtonLink' => route('contact'),

                'extensionSecondaryButtonText' => 'Learn More',

                'extensionSecondaryButtonLink' => '#',

                'extensionImage' => asset('assets/images/services/extension.png'),

                'extensionCards' => [

                    [
                        'icon' => 'fa-solid fa-file-lines',
                        'title' => 'Notice of Allowance Filing',
                    ],

                    [
                        'icon' => 'fa-solid fa-shield-halved',
                        'title' => 'Compliant Specimen Verification',
                    ],

                    [
                        'icon' => 'fa-solid fa-scale-balanced',
                        'title' => '6-Month Timeline Extensions',
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | Pricing
                |--------------------------------------------------------------------------
                */
                'pricingPackages' => [

                    [
                        'title' => 'Basic Package',

                        'price' => 49,

                        'description' => 'Straightforward filing tools to get your application officially submitted.',

                        'features' => [

                            'Federal Database Direct-Hit Search:
                            We scan the USPTO registry to check your mark’s availability and flag immediate conflicts.',

                            'Custom Legal Classification:
                            Our team reviews the USPTO ID manual to precisely categorize your goods and services for maximum protection.',

                        ],

                        'active' => false,

                        'button' => 'Choose Basic',

                        'link' => route('contact'),
                    ],

                    [
                        'title' => 'Standard Package',

                        'price' => 299,

                        'description' => 'Step up to dedicated legal guidance and brand enforcement tools.',

                        'features' => [

                            '1-on-1 Attorney Consultation: Speak directly with a trademark lawyer during a focused 15-minute session to address your specific brand questions.',

                            'Cease & Desist Safeguards: Receive formal documentation to take immediate action if another business attempts to infringe on your name.',

                        ],

                        'active' => true,

                        'badge' => 'ENHANCED PROTECTION',

                        'button' => 'Choose Standard',

                        'link' => route('contact'),
                    ],

                    [
                        'title' => 'Premium Package',

                        'price' => 539,

                        'description' => 'The gold standard for rapid filing and long-term brand monitoring.',

                        'features' => [

                            'Comprehensive Strategy Session: An extended 1-hour consultation with a trademark attorney for deep-dive legal planning.',

                            '48-Hour Priority Rush Processing: Fast-track your application structure to lock in your official filing date as quickly as possible.',

                            'Continuous Infringement Monitoring: Alerts to safeguard your registered mark from copycats (free trial included).',

                        ],

                        'active' => false,

                        'button' => 'Choose Premium',

                        'link' => route('contact'),
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | Authority
                |--------------------------------------------------------------------------
                */
                'authorityTitle' => 'Statement of Use vs. Extension Request',

                'authorityLeftIcon' => 'fa-regular fa-file-lines',

                'authorityLeftTitle' => 'Statement of Use (SOU)',

                'authorityLeftItems' => [

                    'Required when your goods or services are actively sold in commerce',

                    'Must include a verified specimen (packaging, website screenshot, or product tags)',

                    'Final legal hurdle to convert a pending mark into an official registration',

                ],

                'authorityRightTitle' => '6-Month Extension Request',

                'authorityRightDescription' => 'If your brand, product line, or website is still under development when your Notice of Allowance arrives, you can file a 6-month extension. This preserves your nationwide priority date and legal rights while you prepare for official launch.',

                /*
                |--------------------------------------------------------------------------
                | Testimonials
                |--------------------------------------------------------------------------
                */

                'testimonialTitle' => 'Smooth Transitions to Full Registration',

                'testimonials' => [

                    [
                        'stars' => 5,
                        'review' => 'Our product launch was delayed by 4 months, but USA Trademark Expert filed an extension effortlessly. We preserved our priority filing date without any stress.',
                        'name' => 'D. Thorne',
                        'designation' => 'Hardware Startup Founder',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'Submitting our Statement of Use was quick and painless. They audited our digital specimens, submitted the SOU, and we received our official registration certificate shortly after!',
                        'name' => 'M. Vance',
                        'designation' => 'Apparel Brand Owner',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'Great guidance on what counts as acceptable commercial proof for an Intent-to-Use filing. Their team made sure our submission passed USPTO review on the first try.',
                        'name' => 'C. Lin',
                        'designation' => 'Software Producer',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'Our product launch was delayed by 4 months, but USA Trademark Expert filed an extension effortlessly. We preserved our priority filing date without any stress.',
                        'name' => 'D. Thorne',
                        'designation' => 'Hardware Startup Founder',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'Submitting our Statement of Use was quick and painless. They audited our digital specimens, submitted the SOU, and we received our official registration certificate shortly after!',
                        'name' => 'M. Vance',
                        'designation' => 'Apparel Brand Owner',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'Great guidance on what counts as acceptable commercial proof for an Intent-to-Use filing. Their team made sure our submission passed USPTO review on the first try.',
                        'name' => 'C. Lin',
                        'designation' => 'Software Producer',
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | FAQs
                |--------------------------------------------------------------------------
                */
                'faqTitle' => 'Frequently Asked Questions',

                'faqs' => [

                    [
                        'question' => 'What is a Statement of Use (SOU)?',
                        'answer' => '<p>A Statement of Use is an official USPTO filing accompanied by real-world evidence (a specimen) demonstrating that your trademark is actively used in commercial trade for the goods or services listed in your application.</p>'
                    ],

                    [
                        'question' => 'When do I need to file a Statement of Use?',
                        'answer' => '<p>You must file an SOU after the USPTO approves your "Intent-to-Use" application and issues a Notice of Allowance. The initial filing deadline is within 6 months of the Notice of Allowance date.</p>'
                    ],

                    [
                        'question' => "What happens if my product or service isn't ready when the Notice of Allowance arrives?",
                        'answer' => '<p>You can submit an official 6-Month Extension Request. This extends your submission timeline while fully preserving your original priority filing date and federal trademark rights.</p>'
                    ],

                    [
                        'question' => 'How many extension requests can I file with the USPTO?',
                        'answer' => '<p>You can request up to five sequential 6-month extensions, granting you a maximum total of 36 months from the issuance date of your Notice of Allowance to put your mark into commercial use.</p>'
                    ],

                    [
                        'question' => 'What qualifies as an acceptable specimen for a Statement of Use?',
                        'answer' => '<p>Acceptable specimens include physical product packaging, stamped tags, branded labels, or a live website screenshot showing direct purchasing options for goods or detailed service descriptions.</p>'
                    ],

                    [
                        'question' => 'What is the difference between an SOU and an Amendment to Allege Use (AAU)?',
                        'answer' => '<p>An AAU is filed before your application is approved for publication, whereas an SOU is filed after the USPTO issues a formal Notice of Allowance. Both serve to submit commercial proof of use to the examiner.</p>'
                    ],

                    [
                        'question' => 'What happens if I miss the 6-month deadline for filing an SOU or Extension?',
                        'answer' => '<p>Missing the deadline without filing an extension causes your trademark application to be declared abandoned by the USPTO, requiring you to restart the application process and pay new government fees.</p>'
                    ],

                    [
                        'question' => 'Can I remove certain products or services from my application when filing an SOU?',
                        'answer' => '<p>Yes. If you are not yet using the trademark for all originally listed items, you can delete specific goods or services from your application to move forward with registering the active ones.</p>'
                    ],

                    [
                        'question' => 'How long does the USPTO take to approve a Statement of Use?',
                        'answer' => '<p>Once submitted, the USPTO examining attorney typically reviews and accepts your SOU within 1 to 2 months, after which your official Certificate of Registration is issued.</p>'
                    ],

                    [
                        'question' => 'Why choose USA Trademark Expert to manage my SOU filing?',
                        'answer' => '<p>Submitting non-compliant specimens or incorrect dates of first use can delay your registration or invalidate your mark. We audit your proof of use and handle all USPTO communications to ensure a flawless transition.</p>'
                    ],
                ],
            ],

            'dmca-takedown' => [
                /*
                |--------------------------------------------------------------------------
                | Meta
                |--------------------------------------------------------------------------
                */
                'metaTitle' => 'Federal Trademark Registration',
                'metaDescription' => 'Protect your brand name, logo, or slogan nationwide with seamless, attorney-assisted USPTO filing.',

                /*
                |--------------------------------------------------------------------------
                | Hero
                |--------------------------------------------------------------------------
                */

                'heroTitle' => 'Professional DMCA Takedown Service',

                'heroDescription' => 'Swiftly remove stolen digital assets, pirated creative works, and unauthorized counterfeit product listings across the web.',

                'heroFeatures' => [
                    'Rapid Content Removal: Stop online piracy by enforcing legally compliant DMCA notices to website hosts and platforms.',
                    'E-Commerce & Marketplace Cleanup: Eliminate stolen imagery and counterfeit listings on Amazon, eBay, Etsy, and social media.',
                    'Search Engine De-Indexing: Remove infringing URL links from Google and Bing search results to protect your traffic and revenue.',
                ],

                'heroButtonText' => 'Start DMCA Takedown',

                'heroButtonLink' => route('contact'),

                'heroImage' => asset('assets/images/services/service-banner.png'),

                /*
                |--------------------------------------------------------------------------
                | Process
                |--------------------------------------------------------------------------
                */
                'processTitle' => 'Why Is Fast DMCA Enforcement Critical?',

                'processDescription' => 'Digital piracy and stolen content harm your brand reputation and divert revenue. Immediate enforcement stops infringers in their tracks.',

                'processCards' => [

                    [
                        'title' => 'Protect Your Brand & Revenue',
                        'description' => 'Unauthorized copying of your visual designs, product photos, or written media steals sales and confuses loyal customers.',
                    ],

                    [
                        'title' => 'Mandatory ISP & Host Compliance',
                        'description' => 'Under federal law, internet service providers and web hosts must act quickly upon receiving a valid DMCA notice or risk legal liability.',
                    ],

                    [
                        'title' => 'Remove Counterfeits Off Search Engines',
                        'description' => 'We enforce search engine removal requests to de-index pirated links, preventing unauthorized sites from ranking for your brand keywords.',
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | Extension
                |--------------------------------------------------------------------------
                */
                'extensionTitle' => 'Enforcing Digital Property Rights Across the Web',

                'extensionDescription' => 'Online content theft occurs in seconds, but leaving stolen assets online damages your search rankings, brand authority, and digital sales. Our managed DMCA Takedown Service identifies non-compliant hosts, prepares legally binding statutory notices, and enforces rapid removal of pirated content across websites, e-commerce platforms, and search engines.',

                'extensionInsightTitle' => 'KEY INSIGHT:',

                'extensionInsight' => 'Under 17 U.S.C. § 512, online service providers and web hosts must act expeditiously to remove or disable access to infringing content upon receiving a valid DMCA notice to preserve their legal safe harbor protection.',

                'extensionPrimaryButtonText' => 'Request Content Takedown',

                'extensionPrimaryButtonLink' => route('contact'),

                'extensionSecondaryButtonText' => 'Learn More',

                'extensionSecondaryButtonLink' => '#',

                'extensionImage' => asset('assets/images/services/extension.png'),

                'extensionCards' => [

                    [
                        'icon' => 'fa-solid fa-file-lines',
                        'title' => 'ISP & Web Host Enforcement',
                    ],

                    [
                        'icon' => 'fa-solid fa-shield-halved',
                        'title' => 'E-Commerce Marketplace Cleanup',
                    ],

                    [
                        'icon' => 'fa-solid fa-scale-balanced',
                        'title' => 'Search Engine De-Indexing',
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | Pricing
                |--------------------------------------------------------------------------
                */
                'pricingPackages' => [

                    [
                        'title' => 'Basic Package',

                        'price' => 49,

                        'description' => 'Straightforward filing tools to get your application officially submitted.',

                        'features' => [

                            'Federal Database Direct-Hit Search:
                            We scan the USPTO registry to check your mark’s availability and flag immediate conflicts.',

                            'Custom Legal Classification:
                            Our team reviews the USPTO ID manual to precisely categorize your goods and services for maximum protection.',

                        ],

                        'active' => false,

                        'button' => 'Choose Basic',

                        'link' => route('contact'),
                    ],

                    [
                        'title' => 'Standard Package',

                        'price' => 299,

                        'description' => 'Step up to dedicated legal guidance and brand enforcement tools.',

                        'features' => [

                            '1-on-1 Attorney Consultation: Speak directly with a trademark lawyer during a focused 15-minute session to address your specific brand questions.',

                            'Cease & Desist Safeguards: Receive formal documentation to take immediate action if another business attempts to infringe on your name.',

                        ],

                        'active' => true,

                        'badge' => 'ENHANCED PROTECTION',

                        'button' => 'Choose Standard',

                        'link' => route('contact'),
                    ],

                    [
                        'title' => 'Premium Package',

                        'price' => 539,

                        'description' => 'The gold standard for rapid filing and long-term brand monitoring.',

                        'features' => [

                            'Comprehensive Strategy Session: An extended 1-hour consultation with a trademark attorney for deep-dive legal planning.',

                            '48-Hour Priority Rush Processing: Fast-track your application structure to lock in your official filing date as quickly as possible.',

                            'Continuous Infringement Monitoring: Alerts to safeguard your registered mark from copycats (free trial included).',

                        ],

                        'active' => false,

                        'button' => 'Choose Premium',

                        'link' => route('contact'),
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | Authority
                |--------------------------------------------------------------------------
                */
                'authorityTitle' => 'Informal Removal Requests vs. Formal DMCA Enforcement',

                'authorityLeftIcon' => 'fa-regular fa-file-lines',

                'authorityLeftTitle' => 'Informal Email Requests',

                'authorityLeftItems' => [

                    'Lacks formal legal weight under federal copyright safe harbor rules',

                    'Frequently ignored by web hosts, offshore servers, and marketplace sellers',

                    'Leaves your stolen digital media and product listings active indefinitely',

                ],

                'authorityRightTitle' => 'Statutory Managed DMCA Takedown',

                'authorityRightDescription' => 'A formal DMCA takedown notice leverages strict statutory requirements under Section 512 of U.S. Copyright Law. It targets hosting infrastructure, domain registrars, and search engines. Web hosts are legally compelled to take swift action to avoid losing their liability immunity, ensuring your stolen content is promptly removed.',

                /*
                |--------------------------------------------------------------------------
                | Testimonials
                |--------------------------------------------------------------------------
                */

                'testimonialTitle' => 'Swift Content Removal & Brand Protection',

                'testimonials' => [

                    [
                        'stars' => 5,
                        'review' => 'A rogue website copied our entire e-commerce store layout and product photography. USA Trademark Expert got the infringing site taken down within 48 hours!',
                        'name' => 'D. Krauss',
                        'designation' => 'E-Commerce Brand Director',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'We noticed unauthorized sellers using our proprietary images on Amazon and eBay. Their team issued formal DMCA notices and cleaned up every single counterfeit listing.',
                        'name' => 'M. Thorne',
                        'designation' => 'Consumer Products Founder',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'Having stolen product pages de-indexed from Google search results restored our organic traffic completely. Professional, relentless, and effective.',
                        'name' => 'S. Chen',
                        'designation' => 'Digital Marketing Lead',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'A rogue website copied our entire e-commerce store layout and product photography. USA Trademark Expert got the infringing site taken down within 48 hours!',
                        'name' => 'D. Krauss',
                        'designation' => 'E-Commerce Brand Director',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'We noticed unauthorized sellers using our proprietary images on Amazon and eBay. Their team issued formal DMCA notices and cleaned up every single counterfeit listing.',
                        'name' => 'M. Thorne',
                        'designation' => 'Consumer Products Founder',
                    ],

                    [
                        'stars' => 5,
                        'review' => 'Having stolen product pages de-indexed from Google search results restored our organic traffic completely. Professional, relentless, and effective.',
                        'name' => 'S. Chen',
                        'designation' => 'Digital Marketing Lead',
                    ],

                ],

                /*
                |--------------------------------------------------------------------------
                | FAQs
                |--------------------------------------------------------------------------
                */
                'faqTitle' => 'Frequently Asked Questions',

                'faqs' => [

                    [
                        'question' => 'What is a DMCA takedown notice?',
                        'answer' => '<p>A DMCA takedown notice is a formal legal request issued under Section 512 of the Digital Millennium Copyright Act that compels web hosts, internet service providers, and platforms to remove copyright-infringing content.</p>'
                    ],

                    [
                        'question' => 'What types of content can be removed using a DMCA notice?',
                        'answer' => '<p>DMCA notices cover stolen original photos, written website content, graphic artwork, video media, software source code, digital products, and unauthorized product packaging designs.</p>'
                    ],

                    [
                        'question' => 'How fast can infringing content be removed?',
                        'answer' => '<p>Most major web hosts, e-commerce platforms, and social networks process compliant DMCA notices and disable infringing access within 24 to 72 hours.</p>'
                    ],

                    [
                        'question' => 'Can DMCA notices remove unauthorized e-commerce listings?',
                        'answer' => '<p>Yes. DMCA notices target stolen product images, copyright-protected product descriptions, and brand logos posted on platforms like Amazon, eBay, Shopify, Etsy, and social media storefronts.</p>'
                    ],

                    [
                        'question' => 'What is search engine de-indexing?',
                        'answer' => '<p>De-indexing involves notifying search engine platforms like Google and Bing to remove infringing URL links from search results, cutting off organic traffic to pirate websites.</p>'
                    ],

                    [
                        'question' => 'What happens if the infringer files a counter-notice?',
                        'answer' => '<p>If an infringer files a formal counter-notice claiming non-infringement, the web host must restore the material in 10 to 14 business days unless legal action is initiated in federal court.</p>'
                    ],

                    [
                        'question' => 'Does DMCA protection apply to websites hosted outside the United States?',
                        'answer' => '<p>While the DMCA is U.S. federal law, most international web hosts, domain registrars, and global networks comply with statutory copyright notices to maintain global network standards.</p>'
                    ],

                    [
                        'question' => 'Do I need a registered copyright to issue a DMCA takedown?',
                        'answer' => '<p>No. Copyright ownership exists automatically upon creation, allowing you to issue a DMCA notice for stolen works without holding a formal federal copyright registration certificate.</p>'
                    ],

                    [
                        'question' => 'What information is required to issue a valid DMCA takedown request?',
                        'answer' => '<p>A valid notice requires identifying the original copyrighted work, direct URLs to the infringing material, web host contact information, a good-faith statement, and a sworn declaration of authorization.</p>'
                    ],

                    [
                        'question' => 'Why choose USA Trademark Expert for managed DMCA enforcement?',
                        'answer' => '<p>We draft precise, statutory-compliant DMCA notices, trace hidden hosting infrastructure, and manage each request through full resolution—ensuring swift removal without administrative hassles.</p>'
                    ],
                ],
            ],

        ];
    }
}

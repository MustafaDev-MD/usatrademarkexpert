@php
    $teamMembers = [
        [
            'image' => 'member-1.jpg',
            'name' => 'IP Attorney',
            'designation' => 'IP Attorney',
            'title' => 'Lisa Jean Borodkin',
            'description' => "Lisa Jean Borodkin is a lawyer practicing business law, entertainment & sports, internet and 3 other areas of law. Lisa received a A.B. degree from Harvard University in 1990, and has been licensed for 28 years. Lisa practices in Los Angeles, CA."
        ],
        [
            'image' => 'member-1.jpg',
            'name' => 'IP Attorney',
            'designation' => 'IP Attorney',
            'title' => 'Joseph C. Lee',
            'description' => "Joseph Lee is an Intellectual Property Attorney admitted to the California State Bar, with a practice focused on trademark and patent law. He advises businesses, entrepreneurs, and innovators on securing, protecting, and enforcing their intellectual property rights, providing strategic legal guidance from filing through registration and portfolio management."
        ],
    ];
@endphp 

<section class="team-members-section">

    {{-- @if(isset($teamMembers) == empty)

    @foreach($teamMembers as $member) --}}

    @forelse($teamMembers ?? [] as $member)

        <article class="team-member">
            <div class="container">

                <div class="team-member-inner">

                    <div class="team-member-image">
                        <img src="{{ asset('assets/images/our-team/' . $member['image']) }}" alt="{{ $member['name'] }}">

                        <div class="team-member-info">
                            <h4>{{ $member['name'] }}</h4>
                            {{-- <span>{{ $member['designation'] ?? '' }}</span> --}}
                        </div>
                    </div>

                    <div class="team-member-content">
                        <h3>{{ $member['title'] }}</h3>

                        <p>
                            {{ $member['description'] }}
                        </p>
                    </div>

                </div>

            </div>
        </article>

    @empty

        <article class="team-member">
            <div class="container">

                <div class="team-member-inner">

                    <div class="team-member-image">
                        <img src="{{ asset('assets/images/our-team/member-1.jpg') }}" alt="John Franklin">

                        <div class="team-member-info">
                            <h4>John Franklin</h4>
                            <span>Paralegal</span>
                        </div>
                    </div>

                    <div class="team-member-content">
                        <h3>Bona Fide Use</h3>

                        <p>
                            Customer Trademark Classification: Using the USPTO's ID manual,
                            our attorneys will devise a class and description of goods and
                            services that best matches what you seek to protect.
                            Customer Trademark Classification: Using the USPTO's ID manual,
                            our attorneys will devise a class and description of goods and
                            services that best matches what you seek to protect.
                        </p>
                    </div>

                </div>

            </div>
        </article>

    @endforelse
    {{-- @endforeach --}}

</section>
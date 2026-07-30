@php
    $teamMembers = [
        [
            'image' => 'member-1.jpg',
            'name' => 'John Franklin',
            'designation' => 'Paralegal',
            'title' => 'Bona Fide Use',
            'description' => "Customer Trademark Classification: Using the USPTO's ID manual,
                        our attorneys will devise a class and description of goods and
                        services that best matches what you seek to protect.
                        Customer Trademark Classification: Using the USPTO's ID manual,
                        our attorneys will devise a class and description of goods and
                        services that best matches what you seek to protect."
        ],
        [
            'image' => 'member-1.jpg',
            'name' => 'Tim Anderson',
            'designation' => 'Trademark Attorney',
            'title' => 'Trademark Registration',
            'description' => "Customer Trademark Classification: Using the USPTO's ID manual,
                        our attorneys will devise a class and description of goods and
                        services that best matches what you seek to protect.
                        Customer Trademark Classification: Using the USPTO's ID manual,
                        our attorneys will devise a class and description of goods and
                        services that best matches what you seek to protect."
        ],
        [
            'image' => 'member-1.jpg',
            'name' => 'Andrew Brown',
            'designation' => 'Legal Advisor',
            'title' => 'Trademark Monitoring',
            'description' => "Customer Trademark Classification: Using the USPTO's ID manual,
                        our attorneys will devise a class and description of goods and
                        services that best matches what you seek to protect.
                        Customer Trademark Classification: Using the USPTO's ID manual,
                        our attorneys will devise a class and description of goods and
                        services that best matches what you seek to protect."
        ],
        [
            'image' => 'member-1.jpg',
            'name' => 'Dwayne Smith',
            'designation' => 'Senior Attorney',
            'title' => 'Trademark Renewal',
            'description' => "Customer Trademark Classification: Using the USPTO's ID manual,
                        our attorneys will devise a class and description of goods and
                        services that best matches what you seek to protect.
                        Customer Trademark Classification: Using the USPTO's ID manual,
                        our attorneys will devise a class and description of goods and
                        services that best matches what you seek to protect."
        ],
        [
            'image' => 'member-1.jpg',
            'name' => 'Richard Westfair',
            'designation' => 'IP Consultant',
            'title' => 'Brand Protection',
            'description' => "Customer Trademark Classification: Using the USPTO's ID manual,
                        our attorneys will devise a class and description of goods and
                        services that best matches what you seek to protect.
                        Customer Trademark Classification: Using the USPTO's ID manual,
                        our attorneys will devise a class and description of goods and
                        services that best matches what you seek to protect."
        ],
        [
            'image' => 'member-1.jpg',
            'name' => 'Raymond Franklin',
            'designation' => 'IP Consultant',
            'title' => 'Brand Protection',
            'description' => "Customer Trademark Classification: Using the USPTO's ID manual,
                        our attorneys will devise a class and description of goods and
                        services that best matches what you seek to protect.
                        Customer Trademark Classification: Using the USPTO's ID manual,
                        our attorneys will devise a class and description of goods and
                        services that best matches what you seek to protect."
        ],
        [
            'image' => 'member-1.jpg',
            'name' => 'Richard Mandel',
            'designation' => 'IP Consultant',
            'title' => 'Brand Protection',
            'description' => "Customer Trademark Classification: Using the USPTO's ID manual,
                        our attorneys will devise a class and description of goods and
                        services that best matches what you seek to protect.
                        Customer Trademark Classification: Using the USPTO's ID manual,
                        our attorneys will devise a class and description of goods and
                        services that best matches what you seek to protect."
        ],
        [
            'image' => 'member-1.jpg',
            'name' => 'Michael Steger',
            'designation' => 'IP Consultant',
            'title' => 'Brand Protection',
            'description' => "Customer Trademark Classification: Using the USPTO's ID manual,
                        our attorneys will devise a class and description of goods and
                        services that best matches what you seek to protect.
                        Customer Trademark Classification: Using the USPTO's ID manual,
                        our attorneys will devise a class and description of goods and
                        services that best matches what you seek to protect."
        ],
    ];
@endphp

<section class="team-members-section">

    @foreach($teamMembers as $member)
        <article class="team-member">
            <div class="container">

                <div class="team-member-inner">

                    <div class="team-member-image">
                        <img src="{{ asset('assets/images/our-team/' . $member['image']) }}" alt="{{ $member['name'] }}">

                        <div class="team-member-info">
                            <h4>{{ $member['name'] }}</h4>
                            <span>{{ $member['designation'] }}</span>
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
    @endforeach

</section>
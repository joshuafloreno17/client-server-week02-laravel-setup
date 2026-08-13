@extends('layouts.app')

@section('title', 'About - TechNova')

@section('content')

<section style="background: #e5e7eb; padding: 70px 0;">
    <div class="container" style="text-align: center;">
        <h1 style="font-size: 42px; margin-bottom: 15px;">
            About TechNova
        </h1>

        <p style="max-width: 700px; margin: auto; line-height: 1.7;">
            Learn more about our company, our purpose, and the people
            behind our technology solutions.
        </p>
    </div>
</section>


<section style="padding: 60px 0;">
    <div class="container">

        <h2 style="font-size: 32px; margin-bottom: 20px;">
            Our History
        </h2>

        <p style="line-height: 1.8; margin-bottom: 40px;">
            TechNova was established with the goal of providing reliable
            and innovative technology solutions to businesses and organizations.
            We continue to develop our skills and services as technology evolves.
        </p>


        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 25px;">

            <div style="background: #f3f4f6; padding: 30px; border-radius: 10px;">
                <h2>Our Mission</h2>
                <p style="line-height: 1.7; margin-top: 15px;">
                    To provide practical, reliable, and user-friendly
                    technology solutions that help our clients achieve
                    their goals.
                </p>
            </div>

            <div style="background: #f3f4f6; padding: 30px; border-radius: 10px;">
                <h2>Our Vision</h2>
                <p style="line-height: 1.7; margin-top: 15px;">
                    To become a trusted technology partner recognized
                    for innovation, quality, and excellent digital solutions.
                </p>
            </div>

        </div>

    </div>
</section>


<section style="background: #f9fafb; padding: 60px 0;">
    <div class="container">

        <h2 style="text-align: center; font-size: 32px; margin-bottom: 35px;">
            Our Core Values
        </h2>

        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">

            <div style="text-align: center; padding: 25px;">
                <h3>Innovation</h3>
                <p style="margin-top: 10px;">
                    We embrace new ideas and technologies.
                </p>
            </div>

            <div style="text-align: center; padding: 25px;">
                <h3>Integrity</h3>
                <p style="margin-top: 10px;">
                    We value honesty and responsible work.
                </p>
            </div>

            <div style="text-align: center; padding: 25px;">
                <h3>Quality</h3>
                <p style="margin-top: 10px;">
                    We aim to deliver dependable solutions.
                </p>
            </div>

            <div style="text-align: center; padding: 25px;">
                <h3>Teamwork</h3>
                <p style="margin-top: 10px;">
                    We work together to achieve better results.
                </p>
            </div>

        </div>

    </div>
</section>


<section style="padding: 60px 0;">
    <div class="container">

        <h2 style="text-align: center; font-size: 32px; margin-bottom: 35px;">
            Meet Our Team
        </h2>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px;">

            <div style="background: #f3f4f6; padding: 30px; text-align: center; border-radius: 10px;">
                <h3>Alex Santos</h3>
                <p>Chief Executive Officer</p>
            </div>

            <div style="background: #f3f4f6; padding: 30px; text-align: center; border-radius: 10px;">
                <h3>Maria Reyes</h3>
                <p>Lead Developer</p>
            </div>

            <div style="background: #f3f4f6; padding: 30px; text-align: center; border-radius: 10px;">
                <h3>John Cruz</h3>
                <p>UI/UX Designer</p>
            </div>

        </div>

    </div>
</section>

@endsection
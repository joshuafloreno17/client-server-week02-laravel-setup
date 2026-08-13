@extends('layouts.app')

@section('title', 'Home - TechNova')

@section('content')

<section style="background: #e5e7eb; padding: 90px 0;">
    <div class="container" style="text-align: center;">

        <h1 style="font-size: 48px; margin-bottom: 20px;">
            Building the Future with Technology
        </h1>

        <p style="font-size: 19px; max-width: 700px; margin: 0 auto 30px;">
            TechNova provides innovative and reliable technology solutions
            that help businesses grow, improve, and succeed in the digital world.
        </p>

        <a href="{{ route('services') }}"
           style="display: inline-block; background: #111827; color: white;
                  padding: 14px 28px; text-decoration: none; border-radius: 6px;">
            Explore Our Services
        </a>

    </div>
</section>


<section style="padding: 70px 0;">
    <div class="container" style="text-align: center;">

        <h2 style="font-size: 34px; margin-bottom: 20px;">
            Welcome to TechNova
        </h2>

        <p style="max-width: 800px; margin: auto; line-height: 1.7;">
            We are a technology company dedicated to delivering modern,
            practical, and user-friendly digital solutions. Our goal is to
            help organizations use technology to improve their operations
            and reach their goals.
        </p>

    </div>
</section>


<section style="background: #f3f4f6; padding: 70px 0;">
    <div class="container">

        <h2 style="text-align: center; font-size: 34px; margin-bottom: 40px;">
            Featured Services
        </h2>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px;">

            <div style="background: white; padding: 30px; border-radius: 10px;">
                <h3>Web Development</h3>
                <p>Modern and responsive websites for businesses and organizations.</p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px;">
                <h3>Mobile Development</h3>
                <p>Useful and user-friendly mobile applications for different platforms.</p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px;">
                <h3>UI/UX Design</h3>
                <p>Clean and engaging interfaces designed around the user experience.</p>
            </div>

        </div>

    </div>
</section>


<section style="padding: 70px 0; text-align: center;">
    <div class="container">

        <h2 style="font-size: 32px; margin-bottom: 15px;">
            Ready to Work With Us?
        </h2>

        <p style="margin-bottom: 25px;">
            Let TechNova help turn your ideas into digital solutions.
        </p>

        <a href="{{ route('contact') }}"
           style="display: inline-block; background: #111827; color: white;
                  padding: 14px 28px; text-decoration: none; border-radius: 6px;">
            Contact Us
        </a>

    </div>
</section>

@endsection
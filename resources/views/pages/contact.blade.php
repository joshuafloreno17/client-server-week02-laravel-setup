@extends('layouts.app')

@section('title', 'Contact - TechNova')

@section('content')

<section style="background: #e5e7eb; padding: 70px 0;">
    <div class="container" style="text-align: center;">
        <h1 style="font-size: 42px; margin-bottom: 15px;">
            Contact Us
        </h1>

        <p style="max-width: 700px; margin: auto; line-height: 1.7;">
            Have a question or want to work with us?
            Get in touch with the TechNova team.
        </p>
    </div>
</section>


<section style="padding: 60px 0;">
    <div class="container">

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">

            <div>
                <h2 style="margin-bottom: 25px;">Get In Touch</h2>

                <p style="margin-bottom: 15px;">
                    📍 <strong>Address:</strong><br>
                    Lumban, Laguna, Philippines
                </p>

                <p style="margin-bottom: 15px;">
                    📧 <strong>Email:</strong><br>
                    technova@example.com
                </p>

                <p style="margin-bottom: 25px;">
                    📞 <strong>Phone:</strong><br>
                    +63 912 345 6789
                </p>

                <h3 style="margin-bottom: 15px;">Follow Us</h3>

                <a href="#" style="margin-right: 15px;">Facebook</a>
                <a href="#" style="margin-right: 15px;">Instagram</a>
                <a href="#">LinkedIn</a>
            </div>


            <div>
                <h2 style="margin-bottom: 25px;">Send Us a Message</h2>

                <form>

                    <label>Name</label>
                    <input type="text"
                           placeholder="Enter your name"
                           style="width: 100%; padding: 12px; margin: 8px 0 18px; border: 1px solid #ccc; border-radius: 5px;">

                    <label>Email</label>
                    <input type="email"
                           placeholder="Enter your email"
                           style="width: 100%; padding: 12px; margin: 8px 0 18px; border: 1px solid #ccc; border-radius: 5px;">

                    <label>Message</label>
                    <textarea rows="6"
                              placeholder="Write your message..."
                              style="width: 100%; padding: 12px; margin: 8px 0 18px; border: 1px solid #ccc; border-radius: 5px;"></textarea>

                    <button type="button"
                            style="background: #111827; color: white; padding: 13px 25px; border: none; border-radius: 5px; cursor: pointer;">
                        Send Message
                    </button>

                </form>
            </div>

        </div>

    </div>
</section>

@endsection
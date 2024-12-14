@include('components.landing.head')

<body>

    <header>
        <section class="hero">
            @include('components.landing.navbar')
            @include('components.landing.hero')
        </section>
    </header>

    @include('components.landing.about')
    @include('components.landing.features')
    @include('components.landing.catalog')
    @include('components.landing.contact')
    @include('components.landing.contact-us')
    @include('components.landing.footer')

    @include('components.landing.scripts')




</body>

</html>

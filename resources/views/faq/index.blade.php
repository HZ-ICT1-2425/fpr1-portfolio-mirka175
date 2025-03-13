@vite(['resources/css/faq.css'])
<x-layout.main>
    <section>
        <img src="{{ asset('images/hz-logo.png') }}" alt="hz-logo" width="30" height="33">
        <h2 class="title">FAQ</h2>
        @foreach($faqs as $faq)
            <x-faq.list-item :faq="$faq"></x-faq.list-item>
        @endforeach
    </section>
</x-layout.main>

@vite(['resources/css/faq.css'])
<x-layout.main>
    <section>
        <img src="{{ asset('images/hz-logo.png') }}" alt="hz-logo" width="30" height="33">
        <h2 class="title">FAQ</h2>

        {{-- Add Create button here --}}
        <a href="{{ route('faqs.create') }}" class="btn-create-faq" style="display:inline-block; margin-bottom:1rem; padding:0.5rem 1rem; background:rgb(187, 86, 141); color:#fff; text-decoration:none; border-radius:4px;">
            + Create New FAQ
        </a>

        @foreach($faqs as $faq)
            <x-faq.list-item :faq="$faq"></x-faq.list-item>
        @endforeach
    </section>
</x-layout.main>

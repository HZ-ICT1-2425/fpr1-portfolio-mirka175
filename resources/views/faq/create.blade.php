@vite(['resources/css/faq.css'])

<x-layout.main>
    <section>
        <img src="{{ asset('images/hz-logo.png') }}" alt="hz-logo" width="30" height="33">
        <h2 class="title">Add New FAQ</h2>

        {{-- Show validation errors --}}
        @if ($errors->any())
            <div class="error-messages">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style="color:red">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('faqs.store') }}" method="POST">
            @csrf

            <div>
                <label for="question">Question</label><br>
                <textarea id="question" name="question" rows="3" required>{{ old('question') }}</textarea>
            </div>

            <div>
                <label for="answer">Answer</label><br>
                <textarea id="answer" name="answer" rows="8" required>{{ old('answer') }}</textarea>
            </div>

            <button type="submit">Create FAQ</button>
        </form>
    </section>
</x-layout.main>

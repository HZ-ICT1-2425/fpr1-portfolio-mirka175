@vite(['resources/css/profile.css'])
<x-layout.main>
    <article>
        <h1>Who am I?</h1>
        <p class="name">Miriam Georgieva</p>
        <table>
            <tr>
                <td>19 years old <br>from Burgas</td>
                <td><img src="{{ asset('images/bg_flag.png') }}" alt="bg_flag"></td>
            </tr>
        </table><br>
        <p class="education" style="margin-bottom: 30px;">I am a first-year bachelor at HZ University of
            <br>Applied
            Sciences, studying ICT
        </p>
        <p class="hobbies"> Some of my hobbies:</p>
        <ul class="hobbiesList">
            <li>Volleyball</li>
            <li>Watching TV series and movies</li>
            <li>Listening to music</li>
            <li>YouTube</li>
            <li>Playing games</li>
        </ul>
        <img src="{{ asset('images/burgas.jpg') }}" alt="burgas_picture" class="images">
    </article>
</x-layout.main>

@vite(['resources/css/home.css'])
<x-layout.main>
    <div class="title">
        <h1>Why the HBO-ICT Program is Perfect for Me</h1>
        <img src="{{ asset('images/ribbon.webp') }}" alt="ribbon" width="40" height="40">
    </div>

    <section>
        <table class="title">
            <tr>
                <td>
                    <article>
                        <div class="title">
                            <h2>My Passion for ICT</h2>
                            <img src="{{ asset('images/sparkles.png') }}" alt="sparkles" width="30" height="35">
                        </div>
                        <p>My passion for the ICT sector is rooted in my belief that technology has the
                            potential to transform the world. It can break down barriers, improve efficiency,
                            and improve the quality of life of people worldwide. I want to help shape a future
                            where technology is harnessed for the greater good. Doesn't matter if the person I'm
                            helping is a small business owner who wants to make a site for his business or a big
                            company to improve a technology that can save lives.
                        </p><br>
                    </article>

                    <article>
                        <h2>Why ICT Suits Me</h2>
                        <p>Information and Communication Technology is not just a major, it opens doors to many
                            opportunities and puts you at the forefront of technology. It is where I can turn my
                            passion for tech into a meaningful and exciting career, where I can make my ideas
                            and imagination reality and express myself in my own way. I am:</p>
                        <ul>
                            <li>Excited about emerging technologies</li>
                            <li>Passionate about talking to people and solving the problems that may occur(in
                                group projects)
                            </li>
                            <li>Committed to continuous learning in a rapidly evolving field</li>
                        </ul>
                    </article>
                    <article>
                        <div class="gitLinks">
                            <h2>Some of the projects I have done in high school:</h2>
                            <p><a href="https://github.com/MKGeorgieva19/Fire-Department-Project.git"
                                  target="_blank">GitHub
                                    Fire-Department-Project</a></p>
                            <p><a href="https://github.com/MKGeorgieva19/Maze-Project" target="_blank">GitHub
                                    Maze-Project</a>
                            </p>
                        </div>
                    </article>
                </td>
                <td><img src="{{ asset('images/computer.jpg') }}" alt="computer" class="computer" width="400px"
                         height="440px"></td>
            </tr>
        </table>
    </section>
</x-layout.main>

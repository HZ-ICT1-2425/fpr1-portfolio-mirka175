@vite(['resources/css/dashboard.css'])
<x-layout.main>
    <section>
        <article>
            <h2>First-Year Test Components</h2>
            <table>
                <thead>
                <tr>
                    <th>Quarter</th>
                    <th>Course</th>
                    <th>ECs</th>
                    <th>Exam</th>
                    <th>Grade</th>
                    <th>Status</th>
                </tr>
                </thead>

                <tr class="block1">
                    <td rowspan="3">Block 1</td>
                    <td>Program- & Career Orientation</td>
                    <td>2,5</td>
                    <td>Presentation (individual)</td>
                    <td>0</td>
                    <td style="background-color: rgb(86, 154, 57);">Passed</td>
                </tr>
                <tr class="block1">
                    <!---->
                    <td>Computer Science Basics</td>
                    <td>5</td>
                    <td>Written knowledge test</td>
                    <td>0</td>
                    <td style="background-color: rgb(86, 154, 57);">Passed</td>
                </tr>
                <tr class="block1">
                    <!---->
                    <td>Programming Basics</td>
                    <td>5</td>
                    <td>Written knowledge test</td>
                    <td>0</td>
                    <td style="background-color: rgb(86, 154, 57);">Passed</td>
                </tr>


                <tr class="block2">
                    <td rowspan="2">Block 2</td>
                    <td rowspan="2">Object-Oriented Programming</td>
                    <td>5</td>
                    <td>Presentation (individual)</td>
                    <td>0</td>
                    <td style="background-color: rgb(86, 154, 57);">Passed</td>
                </tr>
                <tr class="block2">
                    <!-- -->

                    <td>5</td>
                    <td>Written knowledge test</td>
                    <td>0</td>
                    <td style="background-color: rgb(86, 154, 57);">Passed</td>
                </tr>


                <tr class="block1">
                    <td rowspan="4">Block 3</td>
                    <td rowspan="4">Framework Project 1</td>
                    <td>4</td>
                    <td>Written knowledge test</td>
                    <td>0</td>
                    <td style="background-color: rgb(236, 186, 94);">Ongoing</td>
                </tr>
                <tr class="block1">
                    <!-- -->

                    <td>1</td>
                    <td>Written knowledge test</td>
                    <td>0</td>
                    <td style="background-color: rgb(236, 186, 94);">Ongoing</td>
                </tr>
                <tr class="block1">
                    <!-- -->

                    <td>2.5</td>
                    <td>Presentation (group)</td>
                    <td>0</td>
                    <td style="background-color: rgb(236, 186, 94);">Ongoing</td>
                </tr>
                <tr class="block1">
                    <!-- -->

                    <td>2.5</td>
                    <td>Portfolio</td>
                    <td>0</td>
                    <td style="background-color: rgb(236, 186, 94);">Ongoing</td>
                </tr>


                <tr class="block2">
                    <td rowspan="3">Block 4</td>
                    <td rowspan="3">Framework Project 2</td>
                    <td>2.5</td>
                    <td>Presentation (group)</td>
                    <td>0</td>
                    <td style="background-color: rgb(231, 100, 100);">Not started</td>
                </tr>
                <tr class="block2">
                    <!-- -->

                    <td>2.5</td>
                    <td rowspan="2">Portfolio</td>
                    <td>0</td>
                    <td style="background-color: rgb(231, 100, 100);">Not started</td>
                </tr>
                <tr class="block2">
                    <!-- -->

                    <td>5</td>
                    <!-- -->
                    <td>0</td>
                    <td style="background-color: rgb(231, 100, 100);">Not started</td>
                </tr>


                <tr class="block1">
                    <td>Block 3-4</td>
                    <td>Business IT Consultancy Basics</td>
                    <td>2,5</td>
                    <td>Assignment (individual)</td>
                    <td>0</td>
                    <td style="background-color: rgb(236, 186, 94);">Ongoing</td>
                </tr>

                <tr class="block2">
                    <td>Block 1-4</td>
                    <td>Personal Professional Development Exploration</td>
                    <td>12,5</td>
                    <td>Criterion-referenced assessment</td>
                    <td>0</td>
                    <td style="background-color: rgb(236, 186, 94);">Ongoing</td>
                </tr>

                <tr class="block1">
                    <td rowspan="2">Block 2-4</td>
                    <td>IT Personality 1</td>
                    <td>1,25</td>
                    <td>Portfolio</td>
                    <td>0</td>
                    <td style="background-color: rgb(236, 186, 94);">Ongoing</td>
                </tr>
                <tr class="block1">
                    <!-- -->
                    <td>Project Week</td>
                    <td>1,25</td>
                    <td>Portfolio</td>
                    <td>0</td>
                    <td style="background-color: rgb(86, 154, 57);">Passed</td>
                </tr>
            </table>
        </article>
        <article>
            <h2>Progress Overview</h2>
            <div class="progress">
                <div class="progress-bar">23.75/60 EC</div>
            </div>
            <p>NBSA boundary: 45 EC</p>
        </article>
    </section>
</x-layout.main>

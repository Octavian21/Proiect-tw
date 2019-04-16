<div class="right-panel">
    <div class="add-question">
        <div class="question-image">
            <img src="images/user.png" alt="user"><b>Ask question as </b><a class="username" href="">Anon</a>
        </div>
        <select required>
            <option value="">Select Categorie</option>
            <option value="food">Food</option>
            <option value="computer_science">Computer Science</option>
            <option value="teenager">Teenagers</option>
            <option value="family">Family</option>
            <option value="business">Business</option>
            <option value="miscellaneous">Miscellaneous</option>
            <option value="beauty&fashion">Beauty&Fashion</option>
        </select>

        <div>
            <textarea id="quest" maxlength="1000" minlength="1" spellcheck="true"
                placeholder="Enter your question here!"></textarea>
        </div>

        <div class="submitButton-box">
            <div id="charactersRemaining">1000 </div>
            <p>characters remaining</p>
            <script>
            var el;

            function countCharacters(e) {
                var textEntered, countRemaining, counter;
                textEntered = document.getElementById('quest').value;
                counter = (1000 - (textEntered.length));
                countRemaining = document.getElementById('charactersRemaining');
                countRemaining.textContent = counter;
            }
            el = document.getElementById('quest');
            el.addEventListener('keyup', countCharacters, false);
            </script>

            <button onclick="myFunction()" class="submitButton">Submit Question!</button>
        </div>
    </div>
</div>
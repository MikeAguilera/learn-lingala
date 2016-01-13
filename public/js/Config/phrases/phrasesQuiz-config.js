// Setup your quiz text and questions here

// NOTE: pay attention to commas, IE struggles with those bad boys

var basicJSON = {
    "info": {
        "name":    "Phrase Quiz 1",
        "main":    "<p> This is the Phrase Quiz</p>",
        "results": "<h5>Take another quiz</h5><p>Keep learning by taking more quizes.</p>",
        "level1":  "DRC Champion",
        "level2":  "DRC Heavyweight",
        "level3":  "DRC Lightweight",
        "level4":  "DRC Featherweight",
        "level5":  "DRC Amature"  // no comma here
    },
    "questions": [
        { // Question 1 - Multiple Choice, Single True Answer
            "q": "Did you see?",
            "a": [
                {"option": "Ozali komona",    "correct": false},
                {"option": "Omonaki",     "correct": true},
                {"option": "Tala motuka",  "correct": false},
                {"option": "Tala!",     "correct": false} // no comma here
            ],
            "correct": "<p><span>That's right!</span></p>",
            "incorrect": "<p><span>Uhh no.</span> The correct answer is <em>Omonaki</em>.</p>" // no comma here
        },
        { // Question 2 - Multiple Choice, Multiple True Answers, Select Any
            "q": "Do you see?",
            "a": [
                {"option": "Tala moto oyo",   "correct": false},
                {"option": "Komo awa",   "correct": false},
                {"option": "Telema!",  "correct": false},
                {"option": "Ozali komona",   "correct": true} // no comma here
            ],
            "select_any": true,
            "correct": "<p><span>Nice!</span> Yes! That is correct!</p>",
            "incorrect": "<p><span>Hmmm.</span> Nice try. The correct answer is <em>Ozali komona</em>.</p>" // no comma here
        },
        { // Question 3 - Multiple Choice, Multiple True Answers, Select All
            "q": "Look at this person",
            "a": [
                {"option": "Tala moto oyo",  "correct": true},
                {"option": "Tala motuka",  "correct": false},
                {"option": "Seka!",  "correct": false},
                {"option": "Tala!",  "correct": false} // no comma here
            ],
            "correct": "<p><span>Brilliant!</span> You're seriously a genius.</p>",
            "incorrect": "<p><span>Not Quite.</span> But nice try. The correct answer is <em>Tala moto oyo</em>.</p>" // no comma here
        },
        { // Question 4
            "q": "Look!",
            "a": [
                {"option": "Tala!",    "correct": true},
                {"option": "Seka!", "correct": false},
                {"option": "Lipa!",      "correct": false},
                {"option": "Manteka!",   "correct": false} // no comma here
            ],
            "correct": "<p><span>Holy bananas!</span> I didn't actually expect you to know that! Correct!</p>",
            "incorrect": "<p><span>Fail.</span> Sorry. The correct answer is <em>Tala!</em>.</p>" // no comma here
        },
        { // Question 5
            "q": "Look at the car.",
            "a": [
                {"option": "Tala mokanda",    "correct": false},
                {"option": "Tala motuka",    "correct": true},
                {"option": "Tala mbuma",    "correct": false},
                {"option": "Tala mai",     "correct": false} // no comma here
            ],
            "correct": "<p><span>Good Job!</span> You must be very observant!</p>",
            "incorrect": "<p><span>ERRRR!</span>The correct answer is <em>Tala motuka</em>.</p>" // no comma here
        }, 
        { // Question 6 - Multiple Choice, Single True Answer
            "q": "Write here.",
            "a": [
                {"option": "Komo moke",    "correct": false},
                {"option": "Komo awa",     "correct": true},
                {"option": "Komo mai",  "correct": false},
                {"option": "Komo mwama",     "correct": false} // no comma here
            ],
            "correct": "<p><span>That's right!</span></p>",
            "incorrect": "<p><span>Uhh no.</span> Better luck next time. The correct answer is <em>Komo awa</em>.</p>" // no comma here
        },
        { // Question 7 - Multiple Choice, Multiple True Answers, Select Any
            "q": "Sleep!",
            "a": [
                {"option": "Lala pongi!, papi",   "correct": false},
                {"option": "Lala pongi!, papa",   "correct": false},
                {"option": "Lala pongi!, mwana",  "correct": false},
                {"option": "Lala pongi!, lala",   "correct": true} // no comma here
            ],
            "select_any": true,
            "correct": "<p><span>Nice!</span> Yes! That is correct!</p>",
            "incorrect": "<p><span>Hmmm.</span> Nice try. The correct answer is <em>Lala pongi!, lala</em>.</p>" // no comma here
        },
        { // Question 8 - Multiple Choice, Multiple True Answers, Select All
            "q": "Go to sleep on the bed.",
            "a": [
                {"option": "Kende kolala na mbetu",  "correct": true},
                {"option": "Kende kolala na mobali",  "correct": false},
                {"option": "Kende kolala na mwasi",  "correct": false},
                {"option": "Kende kolala na misolo",  "correct": false} // no comma here
            ],
            "correct": "<p><span>Brilliant!</span> You're seriously a genius.</p>",
            "incorrect": "<p><span>Not Quite.</span> But nice try. The correct answer is <em>Kende kolala na mbetu</em>.</p>" // no comma here
        },
        { // Question 9
            "q": "Stand up!",
            "a": [
                {"option": "Maswa!",    "correct": false},
                {"option": "Mwana mobali!", "correct": false},
                {"option": "Lipa!",      "correct": false},
                {"option": "Telema!",   "correct": true} // no comma here
            ],
            "correct": "<p><span>Holy bananas!</span> I didn't actually expect you to know that! Correct!</p>",
            "incorrect": "<p><span>Fail.</span> Sorry. The correct answer is <em>Telema!</em>.</p>" // no comma here
        },
        { // Question 10
            "q": "Laugh!",
            "a": [
                {"option": "Lait!",    "correct": false},
                {"option": "Seka!",    "correct": true},
                {"option": "Mokanda!",    "correct": false},
                {"option": "Alingi!",     "correct": false} // no comma here
            ],
            "correct": "<p><span>Good Job!</span> You must be very observant!</p>",
            "incorrect": "<p><span>ERRRR!</span> The correct answer is <em>Seka!</em>.</p>" // no comma here
        } // no comma here
    ]
};

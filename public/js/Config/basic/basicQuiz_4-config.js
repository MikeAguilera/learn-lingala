// Setup your quiz text and questions here

// NOTE: pay attention to commas, IE struggles with those bad boys

var basicJSON = {
    "info": {
        "name":    "Continious Present Tense",
        "main":    "<p> To Speak: Koloba</p>",
        "results": "<h5>Take another quiz</h5><p>Keep learning by taking more quizes. If you are ready, go on to Verbs!</p>",
        "level1":  "DRC Champion",
        "level2":  "DRC Heavyweight",
        "level3":  "DRC Lightweight",
        "level4":  "DRC Featherweight",
        "level5":  "DRC Amature"  // no comma here
    },
       "questions": [
        { // Question 1 - Multiple Choice, Single True Answer
            "q": "What is the Subject Marker and verb for 'I am speaking'?",
            "a": [
                {"option": "Ozali  Koloba",    "correct": false},
                {"option": "Bazali Koloba",     "correct": false},
                {"option": "Tozali Koloba",  "correct": false},
                {"option": "Nazali Koloba",  "correct": true}
            ],
            "correct": "<p><span>That's right!</span></p>",
            "incorrect": "<p><span>Uhh no.</span> Better luck next time. The correct answer is <em>Nazali Koloba</em>.</p>" // no comma here
        },
        { // Question 2 - Multiple Choice, Multiple True Answers, Select Any
            "q": "What is the Subject Marker and verb for 'You are speaking' (singular)?",
            "a": [
                {"option": "Nazali Koloba",   "correct": false},
                {"option": "Azali  Koloba",   "correct": false},
                {"option": "Ozali  Koloba",  "correct": true},
                {"option": "Bozali Koloba",   "correct": false} // no comma here
            ],
            "select_any": true,
            "correct": "<p><span>Nice!</span> Yes! That is correct. Keep it up!</p>",
            "incorrect": "<p><span>Hmmm.</span> Nice try. The correct answer is <em>Ozali Koloba</em>.</p>" // no comma here
        },
        { // Question 3 - Multiple Choice, Multiple True Answers, Select All
            "q": "What is the Subject Marker and verb for 'He/She is speaking'?",
            "a": [
                {"option": "Bazali Koloba",  "correct": false},
                {"option": "Ezali Koloba",  "correct": false},
                {"option": "Azali Koloba",  "correct": true},
                {"option": "Ozali Koloba",  "correct": false} // no comma here
            ],
            "correct": "<p><span>Brilliant!</span> You're doing a great job.</p>",
            "incorrect": "<p><span>Not Quite.</span> But nice try. The correct answer is <em>Azali Koloba</em>.</p>" // no comma here
        },
        { // Question 4
            "q": "What is the Subject Marker and verb for 'It is speaking'?",
            "a": [
                {"option":"Tozali Koloba",    "correct": false},
                {"option": "Ezali Koloba", "correct": true},
                {"option": "Azali Koloba",      "correct": false},
                {"option": "Ozali Koloba",   "correct": false} // no comma here
            ],
            "correct": "<p><span>Goodness!</span> Correct!</p>",
            "incorrect": "<p><span>Fail.</span> Sorry. The correct answer is <em>Ezali Koloba</em>.</p>" // no comma here
        },
        { // Question 5
            "q": "What is the Subject Marker and verb for 'We are speaking'?",
            "a": [
                {"option": "Bozali Koloba",    "correct": false},
                {"option": "Bazali Koloba",    "correct": false},
                {"option": "Ezali  Koloba",    "correct": false},
                {"option": "Tozali Koloba",     "correct": true} // no comma here
            ],
            "correct": "<p><span>Great Job!</span> You must be very smart!</p>",
            "incorrect": "<p><span>Sorry.</span> The correct answer is <em>Tozali Koloba</em>.</p>" // no comma here
        }, 
        { // Question 6 - Multiple Choice, Single True Answer
            "q": "What is the Subject Marker and verb for 'You all are speaking' (plural)?",
            "a": [
                {"option": "Ozali  Koloba",    "correct": false},
                {"option": "Bazali Koloba",     "correct": false},
                {"option": "Bozali Koloba",  "correct": true},
                {"option": "Ezali  Koloba",     "correct": false} // no comma here
            ],
            "correct": "<p><span>That's right!</span></p>",
            "incorrect": "<p><span>Uhh no.</span> Better luck next time. The correct answer is <em>Bozali Koloba</em>.</p>" // no comma here
        },
        { // Question 7 - Multiple Choice, Multiple True Answers, Select Any
            "q": "What is the Subject Marker and verb for 'They are speaking'?",
            "a": [
                {"option": "Bazali Koloba",   "correct": true},
                {"option": "Ozali  Koloba",   "correct": false},
                {"option": "Azali  Koloba",  "correct": false},
                {"option": "Bozali Koloba",   "correct": false} // no comma here
            ],
            "select_any": true,
            "correct": "<p><span>Nice!</span> Yes! You are amazing!</p>",
            "incorrect": "<p><span>Hmmm.</span> Nice try. The correct answer is <em>Bazali Koloba</em>.</p>" // no comma here
        } // no comma here
    ]
};

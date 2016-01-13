// Setup your quiz text and questions here

// NOTE: pay attention to commas, IE struggles with those bad boys

var basicJSON = {
    "info": {
        "name":    "Present Tense",
        "main":    "<p> To Eat : Kolina</p>",
        "results": "<h5>Take another quiz</h5><p>Keep learning by taking more quizes.</p>",
        "level1":  "DRC Champion",
        "level2":  "DRC Heavyweight",
        "level3":  "DRC Lightweight",
        "level4":  "DRC Featherweight",
        "level5":  "DRC Amature"  // no comma here
    },
       "questions": [
        { // Question 1 - Multiple Choice, Single True Answer
            "q": "What is the Lingala Subject Marker and verb for 'I Eat'?",
            "a": [
                {"option": "Ozo lina",    "correct": false},
                {"option": "Bazo lina",     "correct": false},
                {"option": "Tozo lina",  "correct": false},
                {"option": "Nazo lina",  "correct": true}
            ],
            "correct": "<p><span>That's right!</span></p>",
            "incorrect": "<p><span>Uhh no.</span> Better luck next time. The correct answer is <em>Nazo lina</em>.</p>" // no comma here
        },
        { // Question 2 - Multiple Choice, Multiple True Answers, Select Any
            "q": "What is the Lingala Subject Marker and verb for 'You Eat' (singular)?",
            "a": [
                {"option": "Nazo lina",   "correct": false},
                {"option": "Azo lina",   "correct": false},
                {"option": "Ozo lina",  "correct": true},
                {"option": "Bozo lina",   "correct": false} // no comma here
            ],
            "select_any": true,
            "correct": "<p><span>Nice!</span> Yes! That is correct. Keep it up!</p>",
            "incorrect": "<p><span>Hmmm.</span> Nice try. The correct answer is <em>Ozo lina</em>.</p>" // no comma here
        },
        { // Question 3 - Multiple Choice, Multiple True Answers, Select All
            "q": "What is the Lingala Subject Marker and verb for 'He/She Eats'?",
            "a": [
                {"option": "Bazo lina",  "correct": false},
                {"option": "Ezo lina",  "correct": false},
                {"option": "Ozo lina",  "correct": false},
                {"option": "Azo lina",  "correct": true} // no comma here
            ],
            "correct": "<p><span>Brilliant!</span> You're doing a great job.</p>",
            "incorrect": "<p><span>Not Quite.</span> But nice try. The correct answer is <em>Azo lina</em>.</p>" // no comma here
        },
        { // Question 4
            "q": "What is the Lingala Subject Marker and verb for 'It Eats'?",
            "a": [
                {"option": "Tozo lina",    "correct": false},
                {"option": "Ezo lina", "correct": true},
                {"option": "Azo lina",      "correct": false},
                {"option": "Ozo lina",   "correct": false} // no comma here
            ],
            "correct": "<p><span>Goodness!</span> Correct!</p>",
            "incorrect": "<p><span>Fail.</span> Sorry. The correct answer is <em>Ezo lina</em>.</p>" // no comma here
        },
        { // Question 5
            "q": "What is the Lingala Subject Marker and verb for 'We Eat'?",
            "a": [
                {"option": "Bozo lina",    "correct": false},
                {"option": "Bazo lina",    "correct": false},
                {"option": "Ezo lina",    "correct": false},
                {"option": "Tozo lina",     "correct": true} // no comma here
            ],
            "correct": "<p><span>Great Job!</span> You must be very smart!</p>",
            "incorrect": "<p><span>Sorry.</span> The correct answer is <em>Tozo lina</em>.</p>" // no comma here
        }, 
        { // Question 6 - Multiple Choice, Single True Answer
            "q": "What is the Lingala Subject Marker and verb for 'You Eat' (plural)?",
            "a": [
                {"option": "Ozo lina",    "correct": false},
                {"option": "Bazo lina",     "correct": false},
                {"option": "Bozo lina",  "correct": true},
                {"option": "Ezo lina",     "correct": false} // no comma here
            ],
            "correct": "<p><span>That's right!</span></p>",
            "incorrect": "<p><span>Uhh no.</span> Better luck next time. The correct answer is <em>Bozo lina</em>.</p>" // no comma here
        },
        { // Question 7 - Multiple Choice, Multiple True Answers, Select Any
            "q": "What is the Lingala Subject Marker and verb for 'They Eat'?",
            "a": [
                {"option": "Bazo lina",   "correct": true},
                {"option": "Ozo lina",   "correct": false},
                {"option": "Azo lina",  "correct": false},
                {"option": "Bozo lina",   "correct": false} // no comma here
            ],
            "select_any": true,
            "correct": "<p><span>Nice!</span> Yes! You are amazing!</p>",
            "incorrect": "<p><span>Hmmm.</span> Nice try. The correct answer is <em>Bazo lina</em>.</p>" // no comma here
        } // no comma here
    ]
};

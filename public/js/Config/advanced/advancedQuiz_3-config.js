// Setup your quiz text and questions here

// NOTE: pay attention to commas, IE struggles with those bad boys

var basicJSON = {
    "info": {
        "name":    "Prepositions and Conjunctions",
        "main":    "<p> To Drink: Komela</p>",
        "results": "<h5>Take another quiz</h5><p>Keep learning by taking more quizes.</p>",
        "level1":  "DRC Champion",
        "level2":  "DRC Heavyweight",
        "level3":  "DRC Lightweight",
        "level4":  "DRC Featherweight",
        "level5":  "DRC Amature"  // no comma here
    },
       "questions": [
        { // Question 1 - Multiple Choice, Single True Answer
            "q": "What is the Subject Marker and verb for 'I am drinking'?",
            "a": [
                {"option": " Ozali  Komela",    "correct": false},
                {"option": "Bazali Komela",     "correct": false},
                {"option": "Tozali Komela",  "correct": false},
                {"option": "Nazali Komela",  "correct": true}
            ],
            "correct": "<p><span>That's right!</span>.</p>",
            "incorrect": "<p><span>Uhh no.</span> Better luck next time. The correct answer is <em>Nazali Komela</em>.</p>" // no comma here
        },
        { // Question 2 - Multiple Choice, Multiple True Answers, Select Any
            "q": "What is the Subject Marker and verb for 'You are drinking'?",
            "a": [
                {"option": "Nazali Komela",   "correct": false},
                {"option": "Azali  Komela",   "correct": false},
                {"option": "Ozali  Komela",  "correct": false},
                {"option": "Bozali Komela",   "correct": true} // no comma here
            ],
            "select_any": true,
            "correct": "<p><span>Nice!</span> Yes! That is correct. Keep it up!</p>",
            "incorrect": "<p><span>Hmmm.</span> Nice try. The correct answer is <em>Ozali Komela</em>.</p>" // no comma here
        },
        { // Question 3 - Multiple Choice, Multiple True Answers, Select All
            "q": "What is the Subject Marker and verb for 'He/She is drinking'?",
            "a": [
                {"option": "Bazali Komela",  "correct": false},
                {"option": "Ezali Komela",  "correct": false},
                {"option": "Azali Komela",  "correct": true},
                {"option": "Ozali Komela",  "correct": false} // no comma here
            ],
            "correct": "<p><span>Brilliant!</span> You're doing a great job.</p>",
            "incorrect": "<p><span>Not Quite.</span> But nice try. The correct answer is <em>Azali Komela</em>.</p>" // no comma here
        },
        { // Question 4
            "q": "What is the Subject Marker and verb for 'It is drinking'?",
            "a": [
                {"option":"Tozali Komela",    "correct": false},
                {"option": "Ezali Komela", "correct": true},
                {"option": "Azali Komela",      "correct": false},
                {"option": "Ozali Komela",   "correct": false} // no comma here
            ],
            "correct": "<p><span>Goodness!</span> Correct!</p>",
            "incorrect": "<p><span>Fail.</span> Sorry. The correct answer is <em>Ezali Komela</em>.</p>" // no comma here
        },
        { // Question 5
            "q": "What is the Subject Marker and verb for 'We are drinking'?",
            "a": [
                {"option": "Bozali Komela",    "correct": false},
                {"option": "Bazali Komela",    "correct": false},
                {"option": "Ezali  Komela",    "correct": false},
                {"option": "Tozali Komela",     "correct": true} // no comma here
            ],
            "correct": "<p><span>Great Job!</span> You must be very smart!</p>",
            "incorrect": "<p><span>Sorry.</span> The correct answer is <em>Tozali Komela</em>.</p>" // no comma here
        }, 
        { // Question 6 - Multiple Choice, Single True Answer
            "q": "What is the Subject Marker and verb for 'You are drinking'?",
            "a": [
                {"option": "Ozali  Komela",    "correct": false},
                {"option": "Bazali Komela",     "correct": false},
                {"option": "Bozali Komela",  "correct": true},
                {"option": "Ezali  Komela",     "correct": false} // no comma here
            ],
            "correct": "<p><span>That's right!</span></p>",
            "incorrect": "<p><span>Uhh no.</span> Better luck next time. The correct answer is <em>Bozali Komela</em>.</p>" // no comma here
        },
        { // Question 7 - Multiple Choice, Multiple True Answers, Select Any
            "q": "What is the Subject Marker and verb for 'They are drinking'?",
            "a": [
                {"option": "Bazali Komela",   "correct": true},
                {"option": "Ozali  Komela",   "correct": false},
                {"option": "Azali  Komela",  "correct": false},
                {"option": "Bozali Komela",   "correct": false} // no comma here
            ],
            "select_any": true,
            "correct": "<p><span>Nice!</span> Yes! You are amazing!</p>",
            "incorrect": "<p><span>Hmmm.</span> Nice try. The correct answer is <em>Bazali Komela</em>.</p>" // no comma here
        } // no comma here
    ]
};

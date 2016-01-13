// Setup your quiz text and questions here

// NOTE: pay attention to commas, IE struggles with those bad boys

var basicJSON = {
    "info": {
        "name":    "Future Tense",
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
            "q": "What is the Subject Marker and verb for 'I will drink'?",
            "a": [
                {"option": "Oko  mela",    "correct": false},
                {"option": "Bako mela",     "correct": false},
                {"option": "Toko mela",  "correct": false},
                {"option": "Nako mela",  "correct": true}
            ],
            "correct": "<p><span>That's right!</span></p>",
            "incorrect": "<p><span>Uhh no.</span> Better luck next time. The correct answer is <em>Nako mela</em>.</p>" // no comma here
        },
        { // Question 2 - Multiple Choice, Multiple True Answers, Select Any
            "q": "What is the Subject Marker and verb for 'You will drink' (singular)?",
            "a": [
                {"option": "Nako mela",   "correct": false},
                {"option": "Ako  mela",   "correct": false},
                {"option": "Oko  mela",  "correct": false},
                {"option": "Boko mela",   "correct": true} // no comma here
            ],
            "select_any": true,
            "correct": "<p><span>Nice!</span> Yes! That is correct. Keep it up!</p>",
            "incorrect": "<p><span>Hmmm.</span> Nice try. The correct answer is <em>Oko mela</em>.</p>" // no comma here
        },
        { // Question 3 - Multiple Choice, Multiple True Answers, Select All
            "q": "What is the Subject Marker and verb for 'He/She will drink'?",
            "a": [
                {"option": "Bako mela",  "correct": false},
                {"option": "Eko mela",  "correct": false},
                {"option": "Ako mela",  "correct": true},
                {"option": "Oko mela",  "correct": false} // no comma here
            ],
            "correct": "<p><span>Brilliant!</span> You're doing a great job.</p>",
            "incorrect": "<p><span>Not Quite.</span> But nice try. The correct answer is <em>Ako mela</em>.</p>" // no comma here
        },
        { // Question 4
            "q": "What is the Subject Marker and verb for 'It will drink'?",
            "a": [
                {"option":"Toko mela",    "correct": false},
                {"option": "Eko mela", "correct": true},
                {"option": "Ako mela",      "correct": false},
                {"option": "Oko mela",   "correct": false} // no comma here
            ],
            "correct": "<p><span>Goodness!</span> Correct!</p>",
            "incorrect": "<p><span>Fail.</span> Sorry. The correct answer is <em>Eko mela</em>.</p>" // no comma here
        },
        { // Question 5
            "q": "What is the Subject Marker and verb for 'We will drink'?",
            "a": [
                {"option": "Boko mela",    "correct": false},
                {"option": "Bako mela",    "correct": false},
                {"option": "Eko  mela",    "correct": false},
                {"option": "Toko mela",     "correct": true} // no comma here
            ],
            "correct": "<p><span>Great Job!</span> You must be very smart!</p>",
            "incorrect": "<p><span>Sorry.</span> The correct answer is <em>Toko mela</em>.</p>" // no comma here
        }, 
        { // Question 6 - Multiple Choice, Single True Answer
            "q": "What is the Subject Marker and verb for 'You all will drink' (plural)?",
            "a": [
                {"option": "Oko  mela",    "correct": false},
                {"option": "Bako mela",     "correct": false},
                {"option": "Boko mela",  "correct": true},
                {"option": "Eko  mela",     "correct": false} // no comma here
            ],
            "correct": "<p><span>That's right!</span></p>",
            "incorrect": "<p><span>Uhh no.</span> Better luck next time. The correct answer is <em>Boko mela</em>.</p>" // no comma here
        },
        { // Question 7 - Multiple Choice, Multiple True Answers, Select Any
            "q": "What is the Subject Marker and verb for 'They will drink'?",
            "a": [
                {"option": "Bako mela",   "correct": true},
                {"option": "Oko  mela",   "correct": false},
                {"option": "Ako  mela",  "correct": false},
                {"option": "Boko mela",   "correct": false} // no comma here
            ],
            "select_any": true,
            "correct": "<p><span>Nice!</span> Yes! You are amazing!</p>",
            "incorrect": "<p><span>Hmmm.</span> Nice try. The correct answer is <em>Bako mela</em>.</p>" // no comma here
        } // no comma here
    ]
};

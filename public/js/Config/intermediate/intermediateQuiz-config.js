// Setup your quiz text and questions here

// NOTE: pay attention to commas, IE struggles with those bad boys

var basicJSON = {
    "info": {
        "name":    "Subject Markers Pt. 3",
        "main":    "<p> Identify the Past Tense Subject Markers</p><p> To Drive : Komema</p>",
        "results": "<h5>Take another quiz</h5><p>Keep learning by taking more quizes.</p>",
        "level1":  "DRC Champion",
        "level2":  "DRC Heavyweight",
        "level3":  "DRC Lightweight",
        "level4":  "DRC Featherweight",
        "level5":  "DRC Amature"  // no comma here
    },
    "questions": [
        { // Question 1 - Multiple Choice, Single True Answer
            "q": "What is the Subject Marker for 'I drive'?",
            "a": [
                {"option": "Bamemaki",    "correct": false},
                {"option": "Omemaki",     "correct": false},
                {"option": "Amemaki",  "correct": false},
                {"option": "Namemaki",     "correct": true} // no comma here
            ],
            "correct": "<p><span>That's right!</span></p>",
            "incorrect": "<p><span>Uhh no.</span> Better luck next time. The correct answer is <em>Namemaki</em>.</p>" // no comma here
        },
        { // Question 2 - Multiple Choice, Multiple True Answers, Select Any
            "q": "What is the Subject Marker for 'You drive' (singular)?",
            "a": [
                {"option": "Omemaki",   "correct": true},
                {"option": "Bamemaki",   "correct": false},
                {"option": "Tomemaki",  "correct": false},
                {"option": "Amemaki",   "correct": false} // no comma here
            ],
            "select_any": true,
            "correct": "<p><span>Nice!</span> Yes! That is correct. Keep it up!</p>",
            "incorrect": "<p><span>Hmmm.</span> Nice try. The correct answer is <em>Omemaki</em>.</p>" // no comma here
        },
        { // Question 3 - Multiple Choice, Multiple True Answers, Select All
            "q": "What is the Subject Marker for 'He/She drives'?",
            "a": [
                {"option": "Bomemaki",  "correct": false},
                {"option": "Ememaki",  "correct": false},
                {"option": "Omemaki",  "correct": false},
                {"option": "Amemaki",  "correct": true} // no comma here
            ],
            "correct": "<p><span>Brilliant!</span> You're seriously a genius.</p>",
            "incorrect": "<p><span>Not Quite.</span> But nice try. The correct answer is <em>Amemaki</em>.</p>" // no comma here
        },
        { // Question 4
            "q": "What is the Subject Marker for 'It drives'?",
            "a": [
                {"option": "Tomemaki",    "correct": false},
                {"option": "Ememaki", "correct": true},
                {"option": "Amemaki",      "correct": false},
                {"option": "Omemaki",   "correct": false} // no comma here
            ],
            "correct": "<p>Correct!</p>",
            "incorrect": "<p><span>Fail.</span> Sorry. The correct answer is <em>Ememaki</em>.</p>" // no comma here
        },
        { // Question 5
            "q": "What is the Subject Marker for 'We drive'?",
            "a": [
                {"option": "Bomemaki",    "correct": false},
                {"option": "Bamemaki",    "correct": false},
                {"option": "Ememaki",    "correct": false},
                {"option": "Tomemaki",     "correct": true} // no comma here
            ],
            "correct": "<p><span>Great Job!</span> You must be very observant!</p>",
            "incorrect": "<p><span>Sorry.</span> The correct answer is <em>Tomemaki</em>.</p>" // no comma here
        }, 
        { // Question 6 - Multiple Choice, Single True Answer
            "q": "What is the Subject Marker for 'You all drive' (plural)?",
            "a": [
                {"option": "Omemaki",    "correct": false},
                {"option": "Bamemaki",     "correct": false},
                {"option": "Bomemaki",  "correct": true},
                {"option": "Ememaki",     "correct": false} // no comma here
            ],
            "correct": "<p><span>That's right!</span></p>",
            "incorrect": "<p><span>Uhh no.</span> Better luck next time. The correct answer is <em>Bomemaki</em>.</p>" // no comma here
        },
        { // Question 7 - Multiple Choice, Multiple True Answers, Select Any
            "q": "What is the Subject Marker for 'They drive'?",
            "a": [
                {"option": "Bamemaki",   "correct": true},
                {"option": "Omemaki",   "correct": false},
                {"option": "Amemaki",  "correct": false},
                {"option": "Bomemaki",   "correct": false} // no comma here
            ],
            "select_any": true,
            "correct": "<p><span>Nice!</span> Yes! You are amazing!</p>",
            "incorrect": "<p><span>Hmmm.</span> Nice try. The correct answer is <em>Bamemaki</em>.</p>" // no comma here
        }
        
    ]
};

// Setup your quiz text and questions here

// NOTE: pay attention to commas, IE struggles with those bad boys

var basicJSON = {
    "info": {
        "name":    "Subject Markers Pt. 2",
        "main":    "<p> Identify the Continious Present Tense Subject Markers</p>",
        "results": "<h5>Take another quiz</h5><p>Keep learning by taking more quizes.</p>",
        "level1":  "DRC Champion",
        "level2":  "DRC Heavyweight",
        "level3":  "DRC Lightweight",
        "level4":  "DRC Featherweight",
        "level5":  "DRC Amature"  // no comma here
    },
    "questions": [
        { // Question 1 - Multiple Choice, Single True Answer
            "q": "What is the Subject Marker for 'I'?",
            "a": [
                {"option": "Ezali",    "correct": false},
                {"option": "Ozali",     "correct": false},
                {"option": "Azali",  "correct": false},
                {"option": "Nazali",     "correct": true} // no comma here
            ],
            "correct": "<p><span>That's right!</span></p>",
            "incorrect": "<p><span>Uhh no.</span> Better luck next time. The correct answer is <em>Nazali</em>.</p>" // no comma here
        },
        { // Question 2 - Multiple Choice, Multiple True Answers, Select Any
            "q": "What is the Subject Marker for 'You' (singular)?",
            "a": [
                {"option": "Ozali",   "correct": true},
                {"option": "Bazali",   "correct": false},
                {"option": "Tozali",  "correct": false},
                {"option": "Azali",   "correct": false} // no comma here
            ],
            "select_any": true,
            "correct": "<p><span>Nice!</span> Yes! That is correct. Keep it up!</p>",
            "incorrect": "<p><span>Hmmm.</span> Nice try. The correct answer is <em>Ozali</em>.</p>" // no comma here
        },
        { // Question 3 - Multiple Choice, Multiple True Answers, Select All
            "q": "What is the Subject Marker for 'He/She'?",
            "a": [
                {"option": "Bozali",  "correct": false},
                {"option": "Ezali",  "correct": false},
                {"option": "Ozali",  "correct": false},
                {"option": "Azali",  "correct": true} // no comma here
            ],
            "correct": "<p><span>Brilliant!</span> You're seriously a genius.</p>",
            "incorrect": "<p><span>Not Quite.</span> But nice try. The correct answer is <em>Azali</em>.</p>" // no comma here
        },
        { // Question 4
            "q": "What is the Subject Marker for 'It'?",
            "a": [
                {"option": "Tozali",    "correct": false},
                {"option": "Ezali", "correct": true},
                {"option": "Azali",      "correct": false},
                {"option": "Ozali",   "correct": false} // no comma here
            ],
            "correct": "<p>Correct!</p>",
            "incorrect": "<p><span>Fail.</span> Sorry. The correct answer is <em>Ezali</em>.</p>" // no comma here
        },
        { // Question 5
            "q": "What is the Subject Marker for 'We'?",
            "a": [
                {"option": "Bozali",    "correct": false},
                {"option": "Bazali",    "correct": false},
                {"option": "Ezali",    "correct": false},
                {"option": "Tozali",     "correct": true} // no comma here
            ],
            "correct": "<p><span>Great Job!</span> You must be very observant!</p>",
            "incorrect": "<p><span>Sorry.</span> The correct answer is <em>Tozali</em>.</p>" // no comma here
        }, 
        { // Question 6 - Multiple Choice, Single True Answer
            "q": "What is the Subject Marker for 'You' (plural)?",
            "a": [
                {"option": "Ozali",    "correct": false},
                {"option": "Bazali",     "correct": false},
                {"option": "Bozali",  "correct": true},
                {"option": "Ezali",     "correct": false} // no comma here
            ],
            "correct": "<p><span>That's right!</span></p>",
            "incorrect": "<p><span>Uhh no.</span> Better luck next time. The correct answer is <em>Bozali</em>.</p>" // no comma here
        },
        { // Question 7 - Multiple Choice, Multiple True Answers, Select Any
            "q": "What is the Subject Marker for 'They'?",
            "a": [
                {"option": "Bazali",   "correct": true},
                {"option": "Ozali",   "correct": false},
                {"option": "Azali",  "correct": false},
                {"option": "Bozali",   "correct": false} // no comma here
            ],
            "select_any": true,
            "correct": "<p><span>Nice!</span> Yes! You are amazing!</p>",
            "incorrect": "<p><span>Hmmm.</span> Nice try. The correct answer is <em>Bazali</em>.</p>" // no comma here
        }
        
    ]
};

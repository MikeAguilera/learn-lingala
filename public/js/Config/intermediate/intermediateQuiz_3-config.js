// Setup your quiz text and questions here

// NOTE: pay attention to commas, IE struggles with those bad boys

var basicJSON = {
    "info": {
        "name":    "Subject Markers Pt. 4",
        "main":    "<p> Identify the Future Tense Subject Markers</p>",
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
                {"option": "Eko",    "correct": false},
                {"option": "Oko",     "correct": false},
                {"option": "Ako",  "correct": false},
                {"option": "Nako",     "correct": true} // no comma here
            ],
            "correct": "<p><span>That's right!</span>.</p>",
            "incorrect": "<p><span>Uhh no.</span> Better luck next time. The correct answer is <em>Nako</em>.</p>" // no comma here
        },
        { // Question 2 - Multiple Choice, Multiple True Answers, Select Any
            "q": "What is the Subject Marker for 'You' (singular)?",
            "a": [
                {"option": "Oko",   "correct": true},
                {"option": "Bako",   "correct": false},
                {"option": "Toko",  "correct": false},
                {"option": "Ako",   "correct": false} // no comma here
            ],
            "select_any": true,
            "correct": "<p><span>Nice!</span> Yes! That is correct. Keep it up!</p>",
            "incorrect": "<p><span>Hmmm.</span> Nice try. The correct answer is <em>Oko</em>.</p>" // no comma here
        },
        { // Question 3 - Multiple Choice, Multiple True Answers, Select All
            "q": "What is the Subject Marker for 'He/She'?",
            "a": [
                {"option": "Boko",  "correct": false},
                {"option": "Eko",  "correct": false},
                {"option": "Oko",  "correct": false},
                {"option": "Ako",  "correct": true} // no comma here
            ],
            "correct": "<p><span>Brilliant!</span> You're seriously a genius.</p>",
            "incorrect": "<p><span>Not Quite.</span> But nice try. The correct answer is <em>Ako</em>.</p>" // no comma here
        },
        { // Question 4
            "q": "What is the Subject Marker for 'It'?",
            "a": [
                {"option": "Toko",    "correct": false},
                {"option": "Eko", "correct": true},
                {"option": "Ako",      "correct": false},
                {"option": "Oko",   "correct": false} // no comma here
            ],
            "correct": "<p>Correct!</p>",
            "incorrect": "<p><span>Fail.</span> Sorry. The correct answer is <em>Eko</em>.</p>" // no comma here
        },
        { // Question 5
            "q": "What is the Subject Marker for 'We'?",
            "a": [
                {"option": "Boko",    "correct": false},
                {"option": "Bako",    "correct": false},
                {"option": "Eko",    "correct": false},
                {"option": "Toko",     "correct": true} // no comma here
            ],
            "correct": "<p><span>Great Job!</span> You must be very observant!</p>",
            "incorrect": "<p><span>Sorry.</span> The correct answer is <em>Toko</em>.</p>" // no comma here
        }, 
        { // Question 6 - Multiple Choice, Single True Answer
            "q": "What is the Subject Marker for 'You' (plural)?",
            "a": [
                {"option": "Oko",    "correct": false},
                {"option": "Bako",     "correct": false},
                {"option": "Boko",  "correct": true},
                {"option": "Eko",     "correct": false} // no comma here
            ],
            "correct": "<p><span>That's right!</span></p>",
            "incorrect": "<p><span>Uhh no.</span> Better luck next time. The correct answer is <em>Boko</em>.</p>" // no comma here
        },
        { // Question 7 - Multiple Choice, Multiple True Answers, Select Any
            "q": "What is the Subject Marker for 'They'?",
            "a": [
                {"option": "Bako",   "correct": true},
                {"option": "Oko",   "correct": false},
                {"option": "Ako",  "correct": false},
                {"option": "Boko",   "correct": false} // no comma here
            ],
            "select_any": true,
            "correct": "<p><span>Nice!</span> Yes! You are amazing!</p>",
            "incorrect": "<p><span>Hmmm.</span> Nice try. The correct answer is <em>Bako</em>.</p>" // no comma here
        }
        
    ]
};
